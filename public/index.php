<?php
//Using the parent directory as root
chdir(dirname(__DIR__));
// Setup autoloading
$loader = require_once  'vendor/autoload.php';
//Starting our app
$decoy = new decoy\Application($loader,'config/config.yml');
