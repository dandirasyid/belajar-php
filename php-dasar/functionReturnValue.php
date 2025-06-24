<?php

/**
 * Return untuk mengembalikan data di dalam function
 * Return pada function hanya bisa mengembalikan 1 data saja
 */

function sum(int $first, int $second): int {
    $total = $first + $second;
    return $total;
}

$result = sum(100, 200);
var_dump($result);

$result = sum(20, 80);
var_dump($result);

function getFinalValue(int $value): string {
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(70);
var_dump($score);
