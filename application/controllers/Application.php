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
            'app_id' => '559352467574102',
            'app_secret' => '89b78e834e4d0a8707748c44cd1d1150',
            'default_graph_version' => 'v2.5',
        ]);

        $this->fbHelper = $this->fb->getRedirectLoginHelper();
        $permissions = ['email', 'public_profile', 'user_location', 'user_friends', 'user_about_me']; // optional
        $loginUrl = $this->fbHelper->getLoginUrl('http://happycity.xyz/logincallback', $permissions);

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
}
