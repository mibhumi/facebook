<?php

if(!session_id())
  session_start();
  require_once 'Facebook/autoload.php';
  
  $appid='427989717679692';
  $appsecret='d76636b15e42e8cfdd852b156cc9e566';
  $callbackurl='https://myfacebook.alampatawebsolution.a2hosted.com/callback.php';
  
  $fb = new Facebook\Facebook([
  'app_id' => $appid, // Replace {app-id} with your app id
  'app_secret' => $appsecret,
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();


$loginUrl = $helper->getLoginUrl($callbackurl);
?>