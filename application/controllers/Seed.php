<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seed extends CI_Controller {

    /**
     * Seed with something like
     *
     * curl -N "http://192.168.99.100/survey/seed?city=Barlad"
     */
    public function seed()
    {
        if (empty($_GET['city']))
            die('Hey! Missing ?city=Hurgada');

        $this->load->model('Persist_model');

        $this->Persist_model->init(
            $this->config->item('influx_endpoint'),
            $this->config->item('influx_metric')
        );

        $tags = [
            'fb_id' => '10153707745539524',
            'city' => $_GET['city']
        ];

        for ($i=1; $i<=7; $i++)
            $questions[$i] = $this->getRand($tags['city']);

        foreach ($questions as $id => $value)
            $this->Persist_model->data($value, $tags + ['question_id' => $id]);
    }

    private function getRand($city)
    {
        return ((int)rand(1,2) + strlen($city) + date('m') + date('H')) % 5 + 1;
    }

} // END class