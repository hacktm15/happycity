<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Survey extends Application {

    public function index()
    {
        $data = array();

        $this->load->view('survey/submit', $data + $this->sharedData);
    }

    public function submit()
    {

    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou');
    }

} // END class