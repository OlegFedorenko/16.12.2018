<?php

class Car
{
    private $name;
    private $carClass;
    private $price;
    private $isBusy;

    public function __construct(string $name, string $carClass, int $price,bool $isBusy)
    {
        $this->name = $name;
        $this->carClass = $carClass;
        $this->price = $price;
        $this->isBusy = $isBusy;
    }

    public function getIsBisy()
    {
        return $this->isBusy;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}