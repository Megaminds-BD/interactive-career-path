<?php

class FileStorage
{
    public function save(array $data)
    {
        file_put_contents('users.txt', serialize($data));
    }
}