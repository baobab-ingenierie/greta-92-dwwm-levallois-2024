<?php
class Task
{
    public string $name;
    public float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function calculatePrice(): float
    {
        return $this->price;
    }
}