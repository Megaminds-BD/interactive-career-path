<?php

// Encapsulate complex conditional logic

class User
{
    private $balance = 100;
    private $hasDue = false;

    public function canWithdrawAmount($amount)
    {
        return $this->balance > $amount && $this->hasDue === false;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }
}

$user = new User();

$amount = 1000;

if ($user->canWithdrawAmount($amount)) {
    $user->withdraw($amount);
}
