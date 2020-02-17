<?php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => '',
  'client_id' => '',
  'client_secret' => '',
  'redirect_uri' => 'http://localhost:8888/',
  'scope' => 'openid profile email',
]);

$userInfo = $auth0->getUser();

?>

<?php if(!$userInfo): ?>
  <a href="login.php">Log In</a>
<?php else: ?>
  <p>Welcome <?= htmlspecialchars( $userInfo['name'] ); ?></p>
  <a href="logout.php">Logout</a>
<?php endif ?>