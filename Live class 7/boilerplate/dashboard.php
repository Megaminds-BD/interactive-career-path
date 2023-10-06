<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PicoCSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <title>Dashboard</title>
</head>

<body>
    <h1>Howdy, <?= $_SESSION['user_name'];  ?> 👋</h1>
    <p>You're now logged in!</p>

    <a href="/logout.php" role="button">Logout</a>
</body>

</html>