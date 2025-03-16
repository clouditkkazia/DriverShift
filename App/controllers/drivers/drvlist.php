<?php

//get the namespace and DB config from here
use Framework\Database;

//get the config db read the credentials
$config = require basePath('config/db.php');
//create a mew  instance with config to connect
$db = new Database($config);

//get ur results here , with query
$drvrecords = $db->query('select * from drvrecords')->fetchAll();
//inspect($drvrecords);

//load the view and the send the results with it ..LOADVIEW has the extract results
//t o pass to view page which loads all the drivers
loadView('drvlistings/drvrecords', ['drvrecords' => $drvrecords]);
