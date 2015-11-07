<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Application.php');

class Welcome extends Application {

    public function index()
    {
        $data['current'] = 'login';

        $facebook_access_token = $this->session->userdata('facebook_access_token');
        if ($facebook_access_token) {
            $response = $this->fb->get('/me?fields=friends');
            $fbData = $response->getDecodedBody();


            $friends = $fbData['friends']['data'];
            foreach ($friends as &$val) {
                $val['avatar'] = "http://graph.facebook.com/" . $val['id'] . "/picture";
            }
            $data['friends'] = $friends;
            var_dump($friends);
        }

        $this->load->view('main', $data + $this->sharedData);
    }
}
