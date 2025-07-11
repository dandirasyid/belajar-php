<?php

/**
 * Recursive function adalah kemampuan function untuk memanggil function dirinya sendiri
 *  
 */

function factorialLoop(int $value): int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(4));

function factorialRecursive(int $value): int {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

function loop(int $value) {
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop ke - $value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(10);
