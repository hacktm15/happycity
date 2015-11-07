<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Application.php');

class Welcome extends Application {

    public function index()
    {
        $data['current'] = 'login';

        var_dump($this->sharedData);

        $this->load->view('main', $data + $this->sharedData);
    }
}
