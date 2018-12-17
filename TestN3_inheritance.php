<?php

require_once __DIR__.'/classes/Econom.php';
require_once __DIR__.'/classes/Premium.php';
require_once __DIR__.'/classes/Cargo.php';
require_once __DIR__.'/classes/Autopark.php';

$autopark = new Autopark();

$autopark->setCar(new Econom('Ford',50, false));
$autopark->setCar(new Econom('Opel', 30, true));
$autopark->setCar(new Econom('Renault', 45, false));
$autopark->setCar(new Econom('Fiat', 40, true));
$autopark->setCar(new Premium('Lexus', 100, true));
$autopark->setCar(new Premium('BMW', 90, false));
$autopark->setCar(new Premium('Bentley', 140, true));
$autopark->setCar(new Cargo('MAN', 240, true));
$autopark->setCar(new Cargo('Mersedes', 250, true));
$autopark->setCar(new Cargo('Tatra', 220, true));

echo "Количество свободных автомобилей: ".'<b>'.$autopark->getAvailableCars().'</b>'.'<br>';

echo "Количество занятых автомобилей: ".'<b>'.$autopark->getBusyCars().'</b>'.'<br>';

echo "Cумма зарабатываемых средств на текущий момент: ".'<b>'.$autopark->getProfit().'</b>'.'<br>';