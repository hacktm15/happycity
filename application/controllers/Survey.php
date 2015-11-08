<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Survey extends Application {

    public function index()
    {
        if (!isset($this->sharedData['userData']['id']))
            redirect('http://' . $_SERVER['HTTP_HOST']);

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


        redirect('http://' . $_SERVER['HTTP_HOST'] . '/survey/thankyou');
    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou', $this->sharedData);
    }

    /**
     * Seed with something like
     *
     * curl -N "http://192.168.99.100/survey/seed?city=Barlad"
     */
    public function seed()
    {
        if (empty($_GET['city']))
            die('Hey! Missing ?city=Hurgada');

        $this->load->model('Persist_model');

        $this->Persist_model->init(
            $this->config->item('influx_endpoint'),
            $this->config->item('influx_metric')
        );

        $tags = [
            'fb_id' => '10153707745539524',
            'city' => $_GET['city']
        ];

        for ($i=1; $i<=7; $i++)
            $questions[$i] = $this->getRand($tags['city']);

        foreach ($questions as $id => $value)
            $this->Persist_model->data($value, $tags + ['question_id' => $id]);
    }

    private function getRand($city)
    {
        return ((int)rand(1,2) + strlen($city) + date('m') + date('H')) % 5 + 1;
    }

    private function getLocation( $location )
    {
        return str_replace([', Romania','ș','ț','ă','î','â'], ['','s','t','a','i','a'], $location);
    }

} // END class