<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$fullName = ["Dandi", "Rasyid"];
var_dump($fullName);

// Memanggil variabel berdasarkan index
var_dump($fullName[0]);

// Mengubah data di dalam array berdasarkan index
$fullName[0]= "Syafira";
var_dump($fullName);

// Menambahkan data array
$fullName[] = "Anindita";
var_dump($fullName);

// Menghapus array berdasarkan index
unset($fullName[1]);
var_dump($fullName);

// Menghitung jumlah array
var_dump(count($fullName));

// ARRAY MAP
$dandi = [
    "id" => "Dandi",
    "name" => "Dandi Rasyid",
    "age" => 21,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];

var_dump($dandi);
var_dump($dandi["name"]. " ". $dandi["address"]["country"]);

$syafira = [
    "id" => "Syafira",
    "name" => "Syafira Anindita Maharani",
    "age" => 21,
    "address" => [
        "city" => "Depok",
        "country" => "Indonesia"
    ]
];

var_dump($syafira);
var_dump($syafira["address"]);