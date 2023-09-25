<?php

namespace App\Storage;

use PDO;
use PDOException;

class DB
{
    private string $hostName = 'localhost';
    private string $database = 'test_db';
    private string $userName = 'root';
    private string $password = '';
    private ?PDO $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->hostName};dbname={$this->database}", $this->userName, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully\n";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . PHP_EOL;
        }
    }

    public function createTable(string $sql)
    {
        try {
            $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();

        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}