<?php

declare(strict_types=1);

class ExpenseCategory extends Category
{
    public function __construct(string $name="")
    {
        $this->type = TransactionType::EXPENSE;
        $this->name = $name;
    }
}