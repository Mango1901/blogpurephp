<?php

class DB
{
    private $host = "127.0.0.1";
    private $username = "root";
    private $password = "honganhnguyen";
    private $dbname = "blogpurephp";

    protected function connect()
    {
        $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8';

        $pdo = new PDO($conn, $this->username, $this->password);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

