<?php

namespace App\Model;

class Category implements Model
{
    private int $id;
    private string $name;

    public function getModelName(): string
    {
        return 'categories';
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}