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
        $loginUrl = $this->fbHelper->getLoginUrl('http://happycity.xyz/index.php/logincallback', $permissions);

        $this->sharedData['loginUrl'] = $loginUrl;
        $this->sharedData['userData'] = $this->session->userdata();
    }
}
