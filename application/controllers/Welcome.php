<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {

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

        var_dump($this->session->userdata());


        $this->load->view('main', $data);
    }
}
