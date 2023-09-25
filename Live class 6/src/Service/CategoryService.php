<?php

namespace App\Service;

use App\Repository\Repository;

class CategoryService
{
    private Repository $categoryRepository;

    public function __construct(Repository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function insert(array $data)
    {
        $this->categoryRepository->insert($data);
    }
}