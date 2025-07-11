<?php

/**
 * 
 */

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Dandi");

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Dandi", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Dandi", $filterFunction);

$firstName = "Dandi";
$lastName = "Rasyid";

$sayDandi = function () use ($firstName, $lastName) {
    echo "Hallo Apa Kabar $firstName $lastName ?" . PHP_EOL;
};

$sayDandi();