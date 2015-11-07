<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {

        $fb = new Facebook\Facebook([
            'app_id' => '559352467574102',
            'app_secret' => '89b78e834e4d0a8707748c44cd1d1150',
            'default_graph_version' => 'v2.5',
        ]);

        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'public_profile']; // optional
        $loginUrl = $helper->getLoginUrl('http://happycity.xyz/index.php/logincallback', $permissions);

        $data['loginUrl'] = $loginUrl;
        $data['current'] = 'login';

        $this->load->view('main', $data);
    }
}
