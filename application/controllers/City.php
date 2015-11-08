<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class City extends Application {

    public function index()
    {
        $data['city'] = $this->uri->segment(1);
        $data['cities'] = $this->getCities();
        $data['panel_id'] = $this->getCityPanels()[$data['city']];

        $this->load->view('main', $data + $this->sharedData);
    }

} // END class