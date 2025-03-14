<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$drvrecords = $db->query('select * from drvrecords limit 100')->fetchAll();
//inspect($drvrecords);

loadView('drvlistings/drvrecords', ['drvrecords' => $drvrecords]);
