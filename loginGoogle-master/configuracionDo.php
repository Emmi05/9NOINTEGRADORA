<?php
  require_once 'vendor/autoload.php';

  $clientID = '240176995477-967vejpapa9rt6369p5vi0jj8ogougih.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Integradora%202.0/Integradora%202.0/Modulo%20Docente/indexMa.html';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

?>