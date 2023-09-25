<?php

namespace App\Repository;

use App\Model\Model;

interface Repository
{
    public function insert(array $data);
    public function update(Model $model, array $data);
    public function delete(Model $model);
    public function get(Model $model);
}