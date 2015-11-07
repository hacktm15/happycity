<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Application.php');

class Application extends CI_Controller {

    protected $fbData = array();

    public function __construct() {
        parent::__construct();
        $this->fbData = $this->getFacebookData();
    }

    public function getFacebookData() {
        $fb = new Facebook\Facebook([
            'app_id' => '559352467574102',
            'app_secret' => '89b78e834e4d0a8707748c44cd1d1150',
            'default_graph_version' => 'v2.5',
        ]);

        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'public_profile', 'user_location']; // optional
        $loginUrl = $helper->getLoginUrl('http://happycity.xyz/index.php/logincallback', $permissions);

        $data['loginUrl'] = $loginUrl;
        $data['current'] = 'login';
        $data['userData'] = $this->session->userdata();

        //var_dump($this->session->userdata());
        return $data;
    }

    public function index()
    {
        $this->load->view('main', $this->fbData);
    }
}
