<?php

declare(strict_types=1);

class Income extends Transaction
{
    public function __construct()
    {
        $this->type = TransactionType::INCOME;
    }
}