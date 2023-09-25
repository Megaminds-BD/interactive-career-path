<?php

require 'vendor/autoload.php';

// The following code is just for demonstration
// For real implementation you'll need to organize the code in a better way

$userService = new \App\Service\UserService(new \App\Repository\UserDBRepository());
$userService->insert([
    1,
    'Shaon',
    'shaon@gmail.com'
]);

$categoryService = new \App\Service\CategoryService(new \App\Repository\CategoryDBRepository());
$categoryService->insert([
    1,
    'Dummy category'
]);
