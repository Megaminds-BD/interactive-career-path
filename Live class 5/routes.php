<?php

require_once 'Router.php';

Router::get('user_page', function() {
    (new UserController())->getUserPage();
});

Router::post('user_page', function() {
    $data = [
        'name' => $_POST['name']
    ];

    (new UserController())->storeUserData($data);
});

Router::get('contact_page', function() {
    echo "Contact page";
});
