<?php

class Car2
{
    private $name;
    private $price;
    private $isBusy;

    public function __construct(string $name, int $price,bool $isBusy)
    {
        $this->name = $name;
        $this->price = $price;
        $this->isBusy = $isBusy;
    }

    public function getIsBusy(): bool
    {
        return $this->isBusy;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}