<?php

require_once "data/Product.php";

$product = new Product("Ikan Arwana", 100000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Ikan Palmas", 25000);
$dummy->info();
