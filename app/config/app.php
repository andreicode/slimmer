<?php

use Slim\App as App;


require 'database.php';

$app = new App(['settings' => [
  'displayErrorDetails' => true
  ]]);
