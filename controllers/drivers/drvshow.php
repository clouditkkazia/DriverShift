<?php

$config = require basePath('config/db.php');
$db = new Database($config);

$sysid = $_GET['sysid'] ?? '';
//inspect($sysid);

if (isset($_GET['sysid'])) {
    $params = [
        'sysid' => $sysid
    ];

    $drvshowrecord = $db->query('select * from drvrecords where SystemId=:sysid', $params)->fetch();
}
//inspect($drvshowrecord);

loadView('drvlistings/drvshow', ['drvshowrecord' => $drvshowrecord]);
