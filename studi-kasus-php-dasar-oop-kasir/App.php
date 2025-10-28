<?php

use Entity\Product;
use Service\Cart;

require_once __DIR__ . "/Entity/Product.php";
require_once __DIR__ . "/Service/Cart.php";

$cart = new Cart();

$product1 = new Product(name: "Rendang", price: 10000);
$product2 = new Product(name: "Sushi", price: 100000);
$product3 = new Product(name: "Cumi", price: 20000);

$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);

$cart->showProduct();
