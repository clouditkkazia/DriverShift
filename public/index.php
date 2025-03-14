<?php

/**replaced the spl_autoload_register
 * created composer.json added entries for the app and framework
 * composer install
 */
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';


// require basePath('Framework/Router.php');
// require basepath('Framework/Database.php');

/**
 * spl_autoload_register() is a built-in PHP function that registers a callback 
 * function for autoloading classes. It helps automatically load class definitions
 *  when they are instantiated, without requiring explicit require or include statements.
 * important- FILE NAME SHOULD BE THE SAME AS THE CLASS NAME ie Database.php
 */
//we can use psr4 standard
// spl_autoload_register(function ($class) {
//     $path = basePath('Framework/' . $class . '.php');
//     if (file_exists($path)) {
//         require $path;
//     }
// });

use Framework\Router;

//router object No.1
//create an instance of the router object
$route = new Router();

//putting this here so it can access the instance and add to the routes object from this file. No.2
require '../allmyroutes.php';


//ok i want to send these
//parse url means just get the path to the url ignore the ?sysid=9493043
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//inspectAndDie($uri);
//what method was called get or post or delete or put
$method = $_SERVER['REQUEST_METHOD'];

//just pass whatever u choose
//the object is then sent to the loadroute and that loads the page, NOT HERE!!
$route->loadRoute($uri, $method);
//inspect($route);
