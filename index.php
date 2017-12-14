<?php

require('bootstrap.php');
// require 'router.php';

use App\Models\Database;
//Boot Database Connection
new Database();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once('routes.php');
$routes = 'routes.php';
Router::load($routes);
