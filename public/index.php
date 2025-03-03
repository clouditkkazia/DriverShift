<?php
require '../helpers.php';

//loadView('home');

//routers 
// key = /list/drivers => value 'controllers/drivers/drvlist.php',
$routes = [
    '/' => 'controllers/home.php',
    '/list/drivers' => 'controllers/drivers/drvlist.php',
    '/add/drivers' => 'controllers/drivers/drvcreate.php',
    '/list/vehicles' => 'controllers/vehicles/vehiclelist.php',
    '/add/vehicles' => 'controllers/vehicles/vehcreate.php',
    '404' => 'controllers/error/404.php'
];

$uri = $_SERVER['REQUEST_URI'];
// inspect($uri);

if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    require basePath($routes['404']);
}
