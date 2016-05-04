<?php

use Database\Database as Database;


Database::Instance()->set([

  'host'   => 'localhost',
  'user'   => 'root',
  'pass'   => 'root',
  'dbname' => 'slim'
]);
