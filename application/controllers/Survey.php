<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Survey extends Application {

    public function index()
    {
        $data = array();
        $data = ['questions' => $this->config->item('questions')];

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