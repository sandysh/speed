<?php

require 'app/core/router.php';
require 'vendor/autoload.php';
// require 'router.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $routes = 'routes.php';
require_once('routes.php');

// Router::load($routes);
