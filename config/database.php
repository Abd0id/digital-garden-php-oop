<?php

class Database
{

    private $host = "localhost";
    private $dbName = "digital_garden_oop";
    private $user = "root";
    private $password = "";

    private PDO $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName;",$this->user,$this->password);
        } catch (Throwable $ex) {
            echo 'database erreur';
        }
    }



    public function getConnection(){ return $this->conn; }

    public function __clone()
    {
        throw new Exception("Can't clone a singleton");
    }
}