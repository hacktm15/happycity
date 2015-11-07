<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincallback extends CI_Controller {


    public function index()
    {

        $fb = new Facebook\Facebook([
            'app_id' => '559352467574102',
            'app_secret' => '89b78e834e4d0a8707748c44cd1d1150',
            'default_graph_version' => 'v2.5',
        ]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (isset($accessToken)) {
            // Logged in!
            $_SESSION['facebook_access_token'] = (string) $accessToken;

            // Sets the default fallback access token so we don't have to pass it to each request
            $fb->setDefaultAccessToken($accessToken);

            try {
                $response = $fb->get('/me');
                $userNode = $response->getGraphUser();
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }


            
            

            echo 'Logged in as ' . $userNode->getName();

var_dump($response);

            // Now you can redirect to another page and use the
            // access token from $_SESSION['facebook_access_token']
        }

    }
}
