<?php

namespace App\Repository;

use App\Model\Model;
use App\Storage\DB;

class CategoryDBRepository implements Repository
{
    private DB $db;

    public function __construct()
    {
        $this->db = DB::createConnection();
    }

    public function insert(array $data)
    {
        $sql = "INSERT INTO categories (id, name) VALUES ($data[0], '$data[1]');";

        $this->db->insertData($sql);
    }

    public function update(Model $model, array $data)
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model)
    {
        // TODO: Implement delete() method.
    }

    public function get(Model $model)
    {
        // TODO: Implement get() method.
    }
}