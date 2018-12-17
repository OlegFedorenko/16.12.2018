<?php

require_once __DIR__ . '/Car2.php';

class Premium extends Car2
{
    public function __construct(string $name, int $price, bool $isBusy)
    {
        parent::__construct($name, $price, $isBusy);
    }
}