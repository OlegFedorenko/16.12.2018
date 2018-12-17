<?php

require_once __DIR__ . '/Car2.php';

class Cargo extends Car2
{
    public function __construct(string $name, int $price, bool $isBusy)
    {
        parent::__construct($name, $price, $isBusy);
    }
}