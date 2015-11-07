<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Application.php');

class Welcome extends Application {

    public function index()
    {
        $data['current'] = 'login';

        $response = $thi->fb->get('/me?fields=friends');
        $fbData = $response->getDecodedBody();

        var_dump($fbData);

        $this->load->view('main', $data + $this->sharedData);
    }
}
