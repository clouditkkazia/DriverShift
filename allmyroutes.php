<?php

//set all the routes 
$route->get('/', 'controllers/home.php');
$route->get('/list/drivers', 'controllers/drivers/drvlist.php');
$route->get('/edit/drivers/{$SysId}', 'controllers/drivers/drvedit.php');
$route->get('/viewdrv/drivers/', 'controllers/drivers/drvshow.php');
$route->get('/list/vehicles', 'controllers/vehicles/vehiclelist.php');
$route->get('/add/drivers', 'controllers/drivers/drvcreate.php');
$route->get('/add/vehicles', 'controllers/vehicles/vehcreate.php');


return $route;
