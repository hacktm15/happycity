<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Application.php');

class Welcome extends Application {

    public function index()
    {
        $data['current'] = 'login';

        $data['friends'] = $this->getFbFriends();

        $params['q'] = 'SELECT mean("value") AS "value" FROM "metric_name" WHERE time > now() - 2h GROUP BY city, time(1h);';
        $params['db'] = 'test';

        $q =  $this->config->item('influx_endpoint_read') . http_build_query($params);
        $cities = array();
        $response = json_decode(file_get_contents($q), true)['results'][0]['series'];

        foreach ($response as $val) {
            if (!empty($val['tags']['city'])) {

                $currentTimeframe = array_pop($val['values']);
                $currentValue = $currentTimeframe[1] * 20;

                $previousTimeframe = array_pop($val['values']);
                $previousValue = $previousTimeframe[1] * 20;

                $cities[$val['tags']['city']]['value'] = round($currentValue, 1);
                $cities[$val['tags']['city']]['previous_value'] = round($previousValue, 1);
                $cities[$val['tags']['city']]['variation'] = round(($currentValue / $previousValue) * 100 - 100, 1);
            }
        }

        $cities['national'] = $this->getNational($cities);

        $data['cities'] = $cities;

        $this->load->view('main', $data + $this->sharedData);
    }

    public function privacy()
    {
        $this->load->view('privacy');
    }

    protected function getNational( $cities )
    {
        $nationalCurrentValue = 0;
        $nationalPreviousValue = 0;
        foreach ($cities as $cityName => $values) {
            $nationalCurrentValue += $values['value'];
            $nationalPreviousValue += $values['previous_value'];
        }
        $nationalCurrentValue = round($nationalCurrentValue / count($cities));
        $nationalPreviousValue = round($nationalPreviousValue / count($cities));
        $nationalVariation = round(($nationalCurrentValue / $nationalPreviousValue) * 100 - 100);

        return [
            'value' => $nationalCurrentValue,
            'previous_value' => $nationalPreviousValue,
            'variation' => $nationalVariation
        ];
    }

}
