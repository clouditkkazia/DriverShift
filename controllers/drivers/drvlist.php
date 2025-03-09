<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$drvrecords = $db->query('select * from drvrecords')->fetchAll();
inspect($drvrecords);

loadView('drvlistings/drvrecords');
