<?php

$config = require basePath('config/db.php');
$db = new Database($config);
if (isset($_GET['SysId'])) {
    $drveditrecord = $db->query('select * from drvrecords where SystemId=:SysId')->fetch();
}

//inspect($drveditrecord);

loadView('drvlistings/drvedit', ['drveditrecord' => $drveditrecord]);
