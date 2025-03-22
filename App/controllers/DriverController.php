<?php

namespace App\controllers;

use Framework\Database;
use Framework\Validation;

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
        //Clean the dirty data i.e check to make sure no html tags are in teh fields
        $allowedFields = [
            'drvref',
            //'sysid',
            'firstname',
            'lastname',
            'email',
            'licno',
            'licexp',
            'crmexp'
        ];

        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));
        $newListingData = array_map('sanitize', $newListingData);
        //inspect($newListingData);

        //validating data -is it suposed to be as is or somevalue is missing etc.

        $requiredFields = [
            'drvref',
            'firstname',
            'lastname',
            'email',
            'licno',
            'licexp',
            'crmexp'
        ];

        $errors = [];
        foreach ($requiredFields as $field) {
            if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required!!!';
            };
        }

        if (!empty($errors)) {
            //reload views
            loadview('drvlistings/drvcreate', ['errors' => $errors, 'myvalues' => $newListingData]);
        } else {
            echo 'success';
        };
        //inspectAndDie($errors);
    }
}
