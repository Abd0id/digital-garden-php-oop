<?php

class Database
{

    private $host = "localhost";
    private $dbName = "digital_garden_oop";
    private $user = "root";
    private $password = "root";

    private static ?Database $instance = null;

    private PDO $connection;

    private function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName;",$this->user,$this->password);
        } catch (Throwable $ex) {
            echo 'database erreur'.$ex->getMessage();
        }
    }



        public static function getInstance(): ?Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    // Get the database connection
    public function getConnection(): PDO
    {
        return $this->connection;
    }

    public function __clone()
    {
        throw new Exception("Can't clone a singleton");
    }
}