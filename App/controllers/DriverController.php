<?php

namespace App\controllers;

use Framework\Database;

basePath('helpers.php');

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
        if (isset($_GET['sysid'])) {
            $params = [
                'sysid' => $_GET['sysid']
            ];

            $drvshowrecord = $this->db->query('select * from drvrecords where SystemId=:sysid', $params)->fetch();
        } else {
            loadView('error');
        }
        //inspect($drvshowrecord);
        //goes to teh viewfolder and opens the require php file drvshow and send the 
        //data with it : check the loadview function 
        loadView('drvlistings/drvshow', ['drvshowrecord' => $drvshowrecord]);
    }

    public function drvcreate()
    {
        loadview('drvlistings/drvcreate');
    }
    /**
     * @return void
     */

    public function storedrv()
    {
        $allowedFields = [
            'drvref',
            'sysid',
            'firstname',
            'lastname',
            'email',
            'licno',
            'licexp',
            'crmexp'
        ];


        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));
        $newListingData = array_map('sanitize', $newListingData);
    }
}
