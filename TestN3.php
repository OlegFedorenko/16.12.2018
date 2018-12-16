<?php

require_once __DIR__.'/classes/Car.php';
require_once __DIR__.'/classes/Autopark.php';

$autopark = new Autopark();

$autopark->setCar(new Car('Ford', 'econom',50, false));
$autopark->setCar(new Car('Opel', 'econom', 30, true));
$autopark->setCar(new Car('Renault', 'econom', 45, false));
$autopark->setCar(new Car('Fiat', 'econom', 40, true));
$autopark->setCar(new Car('Lexus', 'premium', 100, true));
$autopark->setCar(new Car('BMW', 'premium', 90, false));
$autopark->setCar(new Car('Bentley', 'premium', 140, true));
$autopark->setCar(new Car('MAN', 'cargo', 240, true));
$autopark->setCar(new Car('Mersedes', 'cargo', 250, true));
$autopark->setCar(new Car('Tatra', 'cargo', 220, true));

echo "Количество свободных автомобилей: ".'<b>'.$autopark->getAvailableCars().'</b>'.'<br>';

echo "Количество занятых автомобилей: ".'<b>'.$autopark->getBisyCars().'</b>'.'<br>';

echo "Cумма зарабатываемых средств на текущий момент: ".'<b>'.$autopark->getProfit().'</b>'.'<br>';