<?php
$db_host = 'localhost';
$db_name = 'laravel_career_path';
$db_user = 'root';
$db_password = '';

try {
    $pdo = new PDO("mysql:host={$db_host};dbname=$db_name;", $db_user, $db_password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $pdo;
} catch (\PDOException $e) {
    die("Database connnection failed: {$e->getMessage()}");
    exit;
}
