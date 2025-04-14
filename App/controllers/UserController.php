<?php

namespace App\Controllers;

use Framework\Database;


class UserController
{
    protected $db;


    public function __construct()
    {
        $config = require basePath('config/db.php');
        //create a mew  instance with config to connect
        $this->db = new Database($config);
    }

    /**
     * show the registration page
     * @return void
     */

    public function create()
    {
        // Logic to show the registration form
        loadview('users/create');
    }

    /**
     * show th elogin page
     * @return void
     */


    public function login()
    {
        // Logic to show the login form
        loadView('users/login');
    }
}
