<?php
// login.php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => '',
  'client_id' => '',
  'client_secret' => '',
  'redirect_uri' => 'http://localhost:8888/',
  'scope' => 'openid profile email',
]);

$auth0->login();