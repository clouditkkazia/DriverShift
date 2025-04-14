<?php

namespace App\controllers;

header("Content-Type: application/json");
//echo 'HERE';



use Framework\Database;

// $datetime = new \DateTime();

class WebHookController
{
    //here i will create a new instance of the database class.
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
            exit;
        }
        //error_log(print_r($data, true)); // This will log the array to the PHP error log
        $query = "CALL icabbi.InsertOrUpdateDrvRecord(:p_SystemId, :p_DrvRef, 
        :p_FirstName, :p_LastName, :p_Email, :p_LicNo, :p_LicExp, :p_SchBExpCrm)";
        // Ensure the date is properly formatted, from epochunix to Y-m-d h:m:s
        if (isset($data['LicExp'])) {
            $datetime = new \DateTime();
            $datetime->setTimestamp($data['LicExp']); // Set epoch timestamp
            $data['LicExp'] = $datetime->format('Y-m-d H:i:s'); // Format as 'YYYY-mm-DD HH:mm:ss'
        }

        if (isset($data['SchBExpCrm'])) {
            $datetime = new \DateTime();
            $datetime->setTimestamp($data['SchBExpCrm']); // Set epoch timestamp
            $data['SchBExpCrm'] = $datetime->format('Y-m-d H:i:s'); // Format as 'YYYY-mm-DD HH:mm:ss'
        }
        $paramToSend = [
            'p_SystemId' => $data['SystemId'],
            'p_DrvRef' => $data['DrvRef'],
            'p_FirstName' => $data['FirstName'],
            'p_LastName' => $data['LastName'],
            'p_Email' => $data['Email'],
            'p_LicNo' => $data['LicNo'],
            'p_LicExp' => $data['LicExp'],
            'p_SchBExpCrm' => $data['SchBExpCrm']
        ];

        //inspectAndDie($paramToSend);
        //here i will open the db for saving data.
        $this->db->query($query, $paramToSend);
        http_response_code(200);
        //echo json_encode(["success" => true]);
    }
}
