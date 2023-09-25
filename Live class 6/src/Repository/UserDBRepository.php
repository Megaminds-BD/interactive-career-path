<?php

namespace App\Repository;

use App\Model\Model;
use App\Storage\DB;

class UserDBRepository implements Repository
{
    private DB $db;

    public function __construct()
    {
        $this->db = DB::createConnection();
    }

    public function insert(array $data)
    {
        $sql = "INSERT INTO users (id, name, email) VALUES ($data[0], '$data[1]', '$data[2]');";

        $this->db->insertData($sql);
    }

    public function update(Model $model, array $data)
    {
        //TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        //TODO: Implement delete() method.
    }

    public function get(Model $model)
    {
        //TODO: Implement get() method.
    }
}