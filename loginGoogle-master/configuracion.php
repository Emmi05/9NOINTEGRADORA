<?php
  require_once 'vendor/autoload.php';

  $clientID = '240176995477-r3veir6ki4in96320mr5bkpdpqqv8r01.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Integradora%202.0/Integradora%202.0/Modulo%20coordinador/indexco.html';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  echo $client->addScope("email");
  echo $client->addScope("profile");

?>