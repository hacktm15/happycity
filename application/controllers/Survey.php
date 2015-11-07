<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function index()
    {
        $data = ['questions' => $this->config->item('questions')];
        $data['userData'] = $this->session->userdata();

        $this->load->view('survey/show', $data);
    }

    public function submit()
    {

    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou');
    }

} // END class