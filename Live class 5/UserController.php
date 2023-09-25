<?php

class UserController
{
    public function getUserPage()
    {
        require_once 'user_form.php';
    }

    public function storeUserData(array $data)
    {
        $fileStorage = new FileStorage();
        $fileStorage->save($data);
    }
}