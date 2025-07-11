<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Array Map
$data_result = array_map(fn(int $value) => $value * 10, $data);
var_dump($data_result);

// rsort atau ascending
rsort($data);
var_dump($data);

// Array Keys
var_dump(array_keys($data));

$person = [
    "first_name" => "Dandi",
    "last_name" => "Rasyid",
];
var_dump(array_keys($person));
var_dump(array_values($person));
