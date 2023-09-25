<?php

namespace App\Storage;

use PDOException;
use PDO;

// Singleton pattern implementation for the DB class
class DB
{
    private static string $hostName = 'localhost';
    private static string $databaseName = 'career_path';
    private static string $userName = 'root';
    private static string $password = '';
    private static ?PDO $conn = null;

    private function __construct()
    {
    }

    public static function createConnection(): void
    {
        if (!self::$conn) {
            return;
        }

        try {
            self::$conn = new PDO("mysql:host=" . self::$hostName. ";dbname=" . self::$databaseName. "", self::$userName, self::$password);

            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully\n";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . PHP_EOL;
        }
    }

    public function createTable(string $sql)
    {
        try {
            self::$conn->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertData(string $sql)
    {
        try {
            self::$conn->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function __destruct()
    {
        self::$conn = null;
    }
}