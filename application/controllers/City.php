<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class City extends Application {

    public function index()
    {
        $cityName = $this->uri->segment(1);
        $city = $this->getCities()[$cityName];

        $panel = $this->getCityPanels($cityName);
        $city += $panel;
        
        $city['city_id'] = $cityName;

        $data['city'] = $city;

        $this->load->view('city', $data + $this->sharedData);
    }

} // END class