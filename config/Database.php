<?php

class Database
{
    private $host = "localhost";
    private $dbname = "fitconnect";
    private $username = "root";
    private $password = "";

    private $connection;

    public function connect()
    {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->username,
                $this->password
            );

            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $this->connection;

        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}