<?php
session_start();

print_r($_SESSION);

// echo $_SESSION['name'];

// unset($_SESSION['name']);

// session_destroy();

session_regenerate_id();
