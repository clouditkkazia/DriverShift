<?php

namespace App\controllers;

use Framework\Database;
use Framework\Validation;


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

        //views/home.view.php. thats what this is loading below
        //App/views/home.view.php
        loadView('home');
    }
}
