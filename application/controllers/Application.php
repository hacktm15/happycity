<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

    public $fb = false;
    public $fbHelper = false;
    public $sharedData = false;

    public function __construct()
    {
        parent::__construct();
        $this->fb = new Facebook\Facebook([
            'app_id' => $this->config->item('fb_app_id'),
            'app_secret' => $this->config->item('fb_secret'),
            'default_graph_version' => $this->config->item('default_graph_version'),
        ]);

        $this->fbHelper = $this->fb->getRedirectLoginHelper();
        $permissions = ['email', 'public_profile', 'user_location', 'user_friends', 'user_about_me']; // optional
        $loginUrl = $this->fbHelper->getLoginUrl('http://' . $_SERVER['HTTP_HOST'] . '/logincallback', $permissions);

        if (isset($_SESSION['facebook_access_token'])) {
            $accessToken = (string) $_SESSION['facebook_access_token'];
            // Sets the default fallback access token so we don't have to pass it to each request
            $this->fb->setDefaultAccessToken($accessToken);
        }


        $this->sharedData['loginUrl'] = $loginUrl;
        $this->sharedData['userData'] = $this->session->userdata();
    }

    public function getFbFriends()
    {
        $friends = array();
        $facebook_access_token = $this->session->userdata('facebook_access_token');
        if ($facebook_access_token) {
            $response = $this->fb->get('/me?fields=friends');
            $fbData = $response->getDecodedBody();

            $friends = $fbData['friends']['data'];

            foreach ($friends as &$val) {
                $val['avatar'] = "http://graph.facebook.com/" . $val['id'] . "/picture";
            }
        }
        return $friends;        
    }

    public function getCities($value='')
    {
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

        return $cities;
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
