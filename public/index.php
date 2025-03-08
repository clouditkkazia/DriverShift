<?php
require '../helpers.php';
require '../Router.php';

//router object No.1
$route = new Router();

//putting this here so it can access the instance and add to the routes object from this file. No.2
require '../allmyroutes.php';


//ok i want to send these
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//just pass whatever u choose
//the object is then sent to the loadroute and that loads the page, NOT HERE!!
$route->loadRoute($uri, $method);
//inspect($route);
