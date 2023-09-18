<?php

declare(strict_types=1);

class Expense extends Transaction
{
    public function __construct()
    {
        $this->type = TransactionType::EXPENSE;
    }
}