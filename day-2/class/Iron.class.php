<?php
include_once "Task.class.php";

class Iron extends Task
{
    public int $nbPieces;

    public function __construct(string $name, float $price, int $nbPieces)
    {
        $this->name = $name;
        $this->price = $price;
        $this->nbPieces = $nbPieces;
    }

    public function calculatePrice(): float
    {
        return $this->price * $this->nbPieces;
    }
}