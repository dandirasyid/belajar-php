<?php

require_once __DIR__ . "/data/Animal.php";
require_once __DIR__ . "/Cat.php";
require_once __DIR__ . "/Dog.php";

$dog = new Dog("Bleki");
$cat = new Cat("Kibi");

$dog->introduce();
$cat->introduce();
