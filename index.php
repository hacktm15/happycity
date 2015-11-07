<?php

require_once __DIR__ . '/Facebook/autoload.php';



$fb = new Facebook\Facebook([
  'app_id' => '177111075965835',
  'app_secret' => '3bc9924659d9349e51f52597b277a8e7',
  'default_graph_version' => 'v2.5',
  ]);

session_start();

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://happycity.xyz/login-callback.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
