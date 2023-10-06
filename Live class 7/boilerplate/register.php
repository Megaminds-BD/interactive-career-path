<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location:dashboard.php");
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

    <title>Create a New Account</title>
</head>

<body class="container">
    <h1>Registration</h1>
    <form method="POST" action="register_user.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="./login.php">Login</a></p>
</body>

</html>