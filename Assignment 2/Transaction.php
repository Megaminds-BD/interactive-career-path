<?php

declare(strict_types=1);

class Transaction implements Model
{
    private TransactionType $type;
    private float $amount;
    private Category $category;

    public static function getModelName(): string
    {
        return 'transactions';
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}