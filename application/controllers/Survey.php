<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function submit()
    {
        $data = array();
        $data['userData'] = $this->session->userdata();

        $this->load->view('survey/submit', $this->fbData + $data);
    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou');
    }

} // END class