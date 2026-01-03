<?php

class Database
{

    private $host = "localhost";
    private $dbName = "digital_garden_oop";
    private $user = "root";
    private $password = "";

    private static ?Database $instance = null;
    private PDO $conn;

    private function __construct()
    {
        try {
            $dsn = "mysql:host=$this->host;dbname= $this->dbName;";
            $this->conn = new PDO($dsn, $this->user, $this->password);
        } catch (Throwable $ex) {
            echo 'database erreur';
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection(){ return $this->conn; }

    public function __clone()
    {
        throw new Exception("Can't clone a singleton");
    }
}