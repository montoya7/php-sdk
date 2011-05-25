<?php
// Awesome Facebook Application
//
// Name: dont tell a lie
//

require_once 'facebook-php-sdk/src/facebook.php';

// Create our Application instance.
$facebook = new Facebook(array(
  'appId' => '100563940036927',
  'secret' => 'b1e83f837df21a7d3eb3465559ef475a',
  'cookie' => true,
)); 