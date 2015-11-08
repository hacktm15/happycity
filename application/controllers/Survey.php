<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Survey extends Application {

    public function index()
    {
        if (!isset($this->sharedData['userData']['id']))
            redirect('https://' . $_SERVER['HTTP_HOST']);

        $data = ['questions' => $this->config->item('questions')];
        $data['friends'] = $this->getFbFriends();

        $facebook_access_token = $this->session->userdata('facebook_access_token');
        if ($facebook_access_token) {
            $response = $this->fb->get('/me?fields=friends');
            $fbData = $response->getDecodedBody();


            $friends = $fbData['friends']['data'];
            foreach ($friends as &$val) {
                $val['avatar'] = "http://graph.facebook.com/" . $val['id'] . "/picture";
            }
            $data['friends'] = $friends;
        }

        $this->load->view('survey/show', $data + $this->sharedData);
    }

    public function submit()
    {
        $questions = $this->input->post('questions');
        $userData = $this->sharedData['userData'];

        if (empty($userData['id'])) {
            //$userData = ['id' => '10153707745539524', 'location' => ['name' => 'Timișoara, Romania']];
            redirect('http://' . $_SERVER['HTTP_HOST'] . '/survey');
        }
        $tags = [
            'fb_id' => $userData['id'],
            'city' => $this->getLocation($userData['location']['name'])
        ];

        $this->load->model('Persist_model');
        $this->Persist_model->init(
            $this->config->item('influx_endpoint'),
            $this->config->item('influx_metric')
        );
        foreach ($questions as $id => $value)
            $this->Persist_model->data($value, $tags + ['question_id' => $id]);


        redirect('https://' . $_SERVER['HTTP_HOST'] . '/survey/thankyou');
    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou', $this->sharedData);
    }

    private function getLocation( $location )
    {
        return str_replace([', Romania','ș','ț','ă','î','â'], ['','s','t','a','i','a'], $location);
    }

} // END class