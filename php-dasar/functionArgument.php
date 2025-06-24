<?php

function sayHello($firstName, $lastName = "") {
    echo "Hello $firstName $lastName " . PHP_EOL;
}

sayHello("Dandi");
sayHello("Rasyid");
sayHello("Dandi", "Rasyid");

function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

/**
 * Variable length argument list
 * Implode() mengubah array menjadi string 
 * */

function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
$values = [10, 20, 30];
sumAll(1, 2, 3, 4, 5);
sumAll(...$values);
