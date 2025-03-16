<?php

//now this one shows the class and the
// method to work with HomeController ->index,drvlist etc

$route->get('/', 'HomeController@index');
/** DRIVER FUNCTIONS */
$route->get('/list/drivers', 'DriverController@drvlist');
$route->get('/viewdrv/drivers/', 'DriverController@drvshow');
$route->get('/add/drivers', 'DriverController@drvcreate');
/************************************************************** */

//set all the routes with the keyvalue pair "/" ---> controllers/home.php
//$route->get('/', 'controllers/home.php');
//$route->get('/list/drivers', 'controllers/drivers/drvlist.php');
// $route->get('/edit/drivers/{$SysId}', 'controllers/drivers/drvedit.php');
// $route->get('/viewdrv/drivers/', 'controllers/drivers/drvshow.php');
// $route->get('/list/vehicles', 'controllers/vehicles/vehiclelist.php');
// $route->get('/add/drivers', 'controllers/drivers/drvcreate.php');
// $route->get('/add/vehicles', 'controllers/vehicles/vehcreate.php');

//new way of doing this using methods
//however KK has to make few adjustments 


return $route;
