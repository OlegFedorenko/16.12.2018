<?php

require_once __DIR__ .'/classes/Car1.php';
require_once __DIR__.'/classes/Autopark.php';

$autopark = new Autopark();

$autopark->setCar(new Car1('Ford', 'econom',50, false));
$autopark->setCar(new Car1('Opel', 'econom', 30, true));
$autopark->setCar(new Car1('Renault', 'econom', 45, false));
$autopark->setCar(new Car1('Fiat', 'econom', 40, true));
$autopark->setCar(new Car1('Lexus', 'premium', 100, true));
$autopark->setCar(new Car1('BMW', 'premium', 90, false));
$autopark->setCar(new Car1('Bentley', 'premium', 140, true));
$autopark->setCar(new Car1('MAN', 'cargo', 240, true));
$autopark->setCar(new Car1('Mersedes', 'cargo', 250, true));
$autopark->setCar(new Car1('Tatra', 'cargo', 220, true));

echo "Количество свободных автомобилей: ".'<b>'.$autopark->getAvailableCars().'</b>'.'<br>';

echo "Количество занятых автомобилей: ".'<b>'.$autopark->getBusyCars().'</b>'.'<br>';

echo "Cумма зарабатываемых средств на текущий момент: ".'<b>'.$autopark->getProfit().'</b>'.'<br>';