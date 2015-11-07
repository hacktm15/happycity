<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Application.php');

class Welcome extends Application {

    public function index()
    {
        $data['current'] = 'login';

        $data['friends'] = $this->getFbFriends();


        $params['q'] = 'SELECT mean("value") AS "value" FROM "metric_name" group by city;';
        $params['db'] = 'test';


        $q =  $this->config->item('influx_endpoint_read') . http_build_query($params);
        $cities = array();
        $response = json_decode(file_get_contents($q), true)['results'][0]['series'];

        foreach ($response as $val) {
            if ($val['tags']['city']) {
                $cities[$val['tags']['city']] = round($val['values'][0][1] * 20);
            }
        }

        $cities['national'] = round(array_sum($cities) / count($cities));

        // var_dump($cities);

        $data['cities'] = $cities;

        $this->load->view('main', $data + $this->sharedData);
    }

    public function privacy()
    {
        $this->load->view('privacy');
    }


}
