<?php
session_start();

if (!isset($_SESSION['views'])) {
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
    <title>Working with Session in PHP</title>
</head>

<body>
    <h1>You have visited this page <?php echo $_SESSION['views']; ?> times</h1>
</body>

</html>
