<?php
session_start();

if (!$_SESSION['views']) {
    $_SESSION['views'] = 1;
} else {
    $_SESSION['views']++;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Pico.css CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">

    <title>Welcome To My Website</title>
</head>

<body class="container">
    <article>
        <h1>Welcome to my Website!</h1>

        <p>If you're just getting started, then please <a href="./register.php" role="button">Register</a> or if you're already a member, then you can <a href="./login.php" role="button">Login</a></p>
    </article>


    <h2>You have visited this page <?= $_SESSION['views']; ?> times</h2>
</body>

</html>