<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Method not accepted. Accepted method is POST");
    exit;
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $pdo = require_once "database.php";

        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $result =  $stmt->execute([$name, $email, $password]);

        if ($result) {
            header("Location:registration_success.php");
            exit;
        } else {
            header("Location:login.php");
            exit;
        }
    } catch (\PDOException $e) {
        die("Database error: {$e->getMessage()}");
    }
} else {
    die("Name, Email & Password is required");
    exit;
}
