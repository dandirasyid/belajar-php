<?php

// Operator union = menggabungkan array
$first = [
    "first_name" => "Dandi",
];

$last = [
    "last_name" => "Rasyid",
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Dandi",
    "last_name" => "Rasyid",
];

$b = [
    "last_name" => "Rasyid",
    "first_name" => "Dandi",
];

// Operator equality
var_dump($a == $b);
// Operator identity
var_dump($a === $b);
