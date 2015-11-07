<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Survey extends Application {

    public function index()
    {
        $data = array();
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
        print_r($_POST);
        print_r($this->sharedData);
    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou');
    }

} // END class