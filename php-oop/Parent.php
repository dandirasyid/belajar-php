<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getShape() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getShape() . PHP_EOL;
echo $rectangle->getParentShape();
