<?php

namespace App\controllers;

use Framework\Database;

class HomeController
{
    protected $db;


    public function __construct()
    {
        $config = require basePath('config/db.php');
        //create a mew  instance with config to connect
        $this->db = new Database($config);
    }

    public function index()
    {
        loadView('home');
    }

    public function drvlist()
    {

        $drvrecords = $this->db->query('select * from drvrecords')->fetchAll();
        //inspect($drvrecords);

        //load the view and the send the results with it ..LOADVIEW has the extract results
        //t o pass to view page which loads all the drivers
        loadView('drvlistings/drvrecords', ['drvrecords' => $drvrecords]);
    }
}
