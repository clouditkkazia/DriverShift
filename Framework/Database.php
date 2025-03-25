<?php

namespace Framework;

//since pdo and others dont exist in the framework folder u have to define or use PDO...
use PDO, PDOException, Exception;

class Database
{

    public $conn;

    //constructor for db class
    /**
     * @param array $config
     * 
     */

    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            //setting the fetch mode to obj means u can call it like $drvrecords->driverref
            //as opposed to $drvrecords['driveref']
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
            //echo 'connected';
        } catch (PDOException $e) {
            throw new Exception("DB connection failed:{$e->getMessage()}");
        }
    }
    /**
     * Query DBB
     * @param string $query
     * @return PDOStatement
     * @throws PDOException
     */

    //here as we have the $params, if there are params then bind them and use for 
    //prepare statements to return the query wiht the results. if nothing then the plain 
    //query e.g select * from driverlistings OR where id=1 and X=y etc.
    //$params['Karim']..btw comes from controller
    public function query($query, $params = [])
    {


        //inspect($params);
        try {
            $sth = $this->conn->prepare($query);
            //bind the params
            //nspect($query);
            foreach ($params as $param => $value) {
                $sth->bindValue(':' . $param, $value);
            }
            //inspectandDie($sth);
            $sth->execute();
            return $sth;
        } catch (PDOException $e) {
            throw new Exception("Query failed to execute:{$e->getMessage()}");
        }
    }
}
