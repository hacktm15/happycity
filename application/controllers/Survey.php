<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Survey extends Application {

    public function submit()
    {
        $data = array();
        $this->load->view('survey/submit', $this->fbData + $data);
    }

    public function thankyou()
    {
        $this->load->view('survey/thankyou');
    }

} // END class