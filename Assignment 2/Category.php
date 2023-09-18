<?php

declare(strict_types=1);

class Category implements Model
{
    protected string $name = '';
    protected TransactionType $type;

    public static function getModelName(): string
    {
        return 'categories';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): TransactionType
    {
        return $this->type;
    }

    public function setType(TransactionType $type): void
    {
        $this->type = $type;
    }
}