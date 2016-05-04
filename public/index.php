<?php

require '../vendor/autoload.php';

require '../app/config/app.php';

// $test = new Model\Test;

// $t = $test->query("SELECT * FROM test");
$t = new Model\Test;
var_dump($t->all());
