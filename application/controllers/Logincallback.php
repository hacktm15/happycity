<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Logincallback extends Application {

    public function index()
    {
        $this->load->helper('url');

        try {
            $accessToken = $this->fbHelper->getAccessToken();
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
            $this->fb->setDefaultAccessToken($accessToken);

            try {
                $response = $this->fb->get('/me?fields=id,email,first_name,last_name,location,picture,friends');
                // $userNode = $response->getGraphUser();
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            $fbData = $response->getDecodedBody();

            $this->session->set_userdata($fbData);

            redirect('http://happycity.xyz/');
            return;
        }

    }
}
