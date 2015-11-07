<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function submit()
    {
        $data = array();
        $this->load->view('survey/submit', $data);
    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou');
    }

} // END class