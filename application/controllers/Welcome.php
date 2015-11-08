<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Application.php');

class Welcome extends Application {

    public function index()
    {
        $data['current'] = 'login';

        $data['friends'] = $this->getFbFriends();

        $data['cities'] = $this->getCities();

        $this->load->view('main', $data + $this->sharedData);
    }

    public function privacy()
    {
        $this->load->view('privacy');
    }

}
