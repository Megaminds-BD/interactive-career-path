<?php

declare(strict_types=1);

class IncomeCategory extends Category
{
    public function __construct(string $name="")
    {
        $this->type = TransactionType::INCOME;
        $this->name = $name;
    }
}