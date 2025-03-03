<?php
require '../helpers.php';

//loadView('home');

//routers 
$routes = [
    '/' => 'controllers/home.php',
    '/list/drivers' => 'controllers/drivers/drvlist.php',
    '/add/drivers' => 'controllers/drivers/drvcreate.php',
    '/list/vehicles' => 'controllers/vehicles/vehiclelist.php',
    '/add/vehicles' => 'controllers/vehicles/vehcreate.php',
];
