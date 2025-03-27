<?php
namespace App\controllers;
header("Content-Type: application/json");
//echo 'HERE';



use Framework\Database;

class WebHookController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        //crete new instance
        $this->db = new Database($config);
    }

    public function upsertDrvRecord()
    {
        $input = file_get_contents("php://input");
        $data = json_decode($input, true);
		if (!$data) {
			http_response_code(400);
			error_log(print_r($data, true)); // This will log the array to the PHP error log
			echo json_encode(["error" => "Invalid JSON input"]);
			exit;}
	    //error_log(print_r($data, true)); // This will log the array to the PHP error log
        http_response_code(200);
        echo json_encode(["success" => true]);

        //here i will open the db for saving data.
    }
}
