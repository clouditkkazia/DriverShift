<?php

//set all the routes 
$route->get('/', 'controllers/home.php');
$route->get('/list/drivers', 'controllers/drivers/drvlist.php');
$route->get('/list/vehicles', 'controllers/vehicles/vehiclelist.php');
$route->post('/add/drivers', 'controllers/drivers/drvcreate.php');
$route->post('/add/vehicles', 'controllers/vehicles/vehcreate.php');

return $route;
