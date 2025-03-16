<?php

namespace App\controllers;

use Framework\Database;


class DriverController
{
    protected $db;


    public function __construct()
    {
        $config = require basePath('config/db.php');
        //create a mew  instance with config to connect
        $this->db = new Database($config);
    }

    public function drvlist()
    {

        $drvrecords = $this->db->query('select * from drvrecords')->fetchAll();
        //inspect($drvrecords);

        //goes to teh viewfolder and opens the require php file drvrecords and send the 
        //data with it : check the loadview function 
        loadView('drvlistings/drvrecords', ['drvrecords' => $drvrecords]);
    }

    public function drvshow()
    {
        $sysid = $_GET['sysid'] ?? '';
        //inspect($sysid);
        if (isset($_GET['sysid'])) {
            $params = [
                'sysid' => $sysid
            ];

            $drvshowrecord = $this->db->query('select * from drvrecords where SystemId=:sysid', $params)->fetch();
        }
        //inspect($drvshowrecord);
        //goes to teh viewfolder and opens the require php file drvshow and send the 
        //data with it : check the loadview function 
        loadView('drvlistings/drvshow', ['drvshowrecord' => $drvshowrecord]);
    }

    public function drvcreate()
    {
        echo 'Driver Add record';
        //goes to teh viewfolder and opens the require php file drvcreate
        loadView('drvlistings/drvcreate');
    }
}
