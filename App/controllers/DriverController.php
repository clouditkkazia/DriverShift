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
            $_SESSION['success_message'] = 'Record Not Found.Make Sure you have SysID synced with icabbi for this record';
            //loadView('error');
        }
        //inspect($drvshowrecord);
        //goes to teh viewfolder and opens the require php file drvshow and send the 
        //data with it : check the loadview function 
        loadView('drvlistings/drvshow', ['drvshowrecord' => $drvshowrecord]);
    }

    public function drvedit()
    {
        if (isset($_GET['sysid'])) {
            $params = [
                'sysid' => $_GET['sysid']
            ];

            $drvshowrecord = $this->db->query('select * from drvrecords where SystemId=:sysid', $params)->fetch();
        } else {
            $_SESSION['success_message'] = 'Record Not Found.Make Sure you have SysID synced with icabbi for this record';
            //loadView('error');
        }
        //inspect($drvshowrecord);
        //goes to teh viewfolder and opens the require php file drvshow and send the 
        //data with it : check the loadview function 
        loadView('drvlistings/drvedit', ['drvshowrecord' => $drvshowrecord]);
    }

    public function drvcreate()
    {
        loadview('drvlistings/drvcreate');
    }
    /**
     * @return void
     */
    public function destoryDrv()
    {
        //echo 'del driver set';
        // inspectAndDie($_GET['sysid']);

        if (isset($_GET['sysid'])) {
            $params = [
                'sysid' => $_GET['sysid']
            ];
            $_SESSION['success_message'] = 'Record Marked as Deleted';
            //$this->db->query('update drvrecords set DrvRef='X_'+DrvRef where SystemId=:sysid', $params);
            loadview('drvlistings/success');
        } else {
            //inspectAndDie($_GET['sysid']);
            loadView('error');
        }

        //set flash message

        //inspect($drvshowrecord);
        //goes to teh viewfolder and opens the require php file drvshow and send the 
        //data with it : check the loadview function 

    }

    public function storedrv()
    {
        //Clean the dirty data i.e check to make sure no html tags are in teh fields
        $allowedFields = [
            'DrvRef',
            'SystemId',
            'FirstName',
            'LastName',
            'Email',
            'LicNo',
            'LicExp',
            'SchBExpCrm'
        ];

        //inspectAndDie($_POST);
        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));
        inspectAndDie($newListingData);
        //callback function sanitize which is in helpers.php , which i am 
        //sending the $newListingData as parameter.
        $newListingData = array_map('sanitize', $newListingData);
        //inspect($newListingData);

        //validating data -is it suposed to be as is or somevalue is missing etc.

        $requiredFields = [
            'DrvRef',
            'SystemId',
            'FirstName',
            'LastName',
            'Email',
            'LicNo',
            'LicExp',
            'SchBExpCrm'
        ];

        $errors = [];
        foreach ($requiredFields as $field) {
            if (
                empty($newListingData[$field]) ||
                !Validation::string($newListingData[$field])
            ) {
                $errors[$field] = $field . ' is required!!!';
                //$errors[$field] = ucfirst($field) . ' is required!!!';
            };
        }

        if (!empty($errors)) {
            //reload views
            if ($_SERVER['REQUEST_METHOD'] === "POST" && !$_POST['updaterec'] === '_update') {
                loadview('drvlistings/drvcreate', ['errors' => $errors, 'myvalues' => $newListingData]);
            } else {
                loadview('drvlistings/drvedit', ['errors' => $errors, 'myvalues' => $newListingData]);
            }
        } else {
            // echo 'success' ;
            //if i have reachede here then to save to DB. 

            $fields = [];
            //loop through the newlisting and save to fields[]
            foreach ($newListingData as $field => $value) {
                $fields[] = $field;
            }
            //implde thisie convert from array to string
            //see results
            $fields = implode(', ', $fields);
            //inspectAndDie($fields);
            //result from array - implode the array to get this below
            //string(71) "DrvRef, SystemId, FirstName, LastName, Email, LicNo, LicExp, SchBExpCrm"

            $values = [];
            foreach ($newListingData as $field => $value) {
                //convert emtpy string to null;
                if ($value == '') {
                    $newListingData[$field] = null;
                }
                $values[] = ':' . $field;
            }
            //see results below
            $values = implode(', ', $values);
            //inspectAndDie($values);
            //string(79) ":DrvRef, :SystemId, :FirstName, :LastName, :Email, :LicNo, :LicExp, :SchBExpCrm"

            //inspectAndDie($fields);
        };
        //inspect($newListingData);

        if ($_POST['_method'] === 'update') {
            $query = "insert into drvrecords ({$fields}) values({$values})";
            $this->db->query($query, $newListingData);
        } else {
            $query = "CALL icabbi.InsertOrUpdateDrvRecord(values({$values})";
            inspectAndDie($query);
            $this->db->query($query);
        }

        //inspectAndDie($newListingData);
        // $query = "CALL icabbi.InsertOrUpdateDrvRecord(:p_SystemId, :p_DrvRef, 
        // :p_FirstName, :p_LastName, :p_Email, :p_LicNo, :p_LicExp, :p_SchBExpCrm)";

        // inspectAndDie($query);
        //redirect('/');
    }
}
