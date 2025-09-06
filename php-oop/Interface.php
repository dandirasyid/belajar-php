<?php

require_once "data/Car.php";

use Data\{LandCruiser};

$car = new LandCruiser();
$car->drive();
echo $car->getTire() . PHP_EOL;
echo $car->hasBrand() . PHP_EOL;
echo $car->isMaintenance() ? "True" : "False" . PHP_EOL;
