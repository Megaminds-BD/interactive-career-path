<?php

namespace App\Service;

use App\Repository\Repository;

class UserService
{
    private Repository $userRepository;

    public function __construct(Repository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function insert(array $data)
    {
        $this->userRepository->insert($data);
    }
}