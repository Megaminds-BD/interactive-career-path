<?php

require_once 'UserController.php';

$controller = new UserController();

$name = readline('User name: ');

$data = [
    'name' => $name
];

$controller->storeUserData($data);