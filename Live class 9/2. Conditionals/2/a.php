<?php

class User
{
    public $balance = 100;
    public $hasDue = false;
}

$user = new User();

$amount = 1000;

if ($user->balance > $amount && $user->hasDue === false) {
    $user->balance -= $amount; // withdraw amount
}
