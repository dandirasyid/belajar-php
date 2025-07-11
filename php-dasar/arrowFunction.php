<?php

/**
 * arrow function merupakan alternatif dari anonymous function
 * jika ada variable di luar closure, arrow function bisa otomatis memanggil
 * arrow function tidak menggunakan kata kunci function dan untuk funtion sederhana
 */

$firstName = "Dandi";
$lastName = "Rasyid";

$anonymousFunction = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();
echo $anonymousFunction();
