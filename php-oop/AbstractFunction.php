<?php

require_once "data/Animal.php";

use Data\{Cat, Dog};

$cat = new Cat();
$cat->name = "Timy";
$cat->run();

$dog = new Dog();
$dog->name = "Bleki";
$dog->run();
