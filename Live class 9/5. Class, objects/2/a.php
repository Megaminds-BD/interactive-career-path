<?php

class UserService
{
    private $userRepository;

    public function save($data)
    {
        $user = $this->userRepository->save($data);

        if ($user instanceof User) {
            return $user;
        }

        return null;
    }
}

$userService = new UserService();
$userData = [];
$user = $userService->save($userData);

if (!$user) {
    // Add exception logic
}