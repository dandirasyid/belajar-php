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

// Latihan 1
$numbers = [2, 4, 6, 8, 10];

$total = 0;

foreach ($numbers as $number){
    $total = $total + $number;
}

echo("Jumlah elemen yang ada di dalam array". " = ". $total);
echo("\n");
// Latihan 2
$num = [3, 7, 1, 9, 5];
$max = max($num);
echo("Menampilkan nilai maksimal". " = ". $max);

$numbs = [3, 7, 1, 9, 5];
$maks = $numbs[0];

foreach ($numbs as $numb){
    if ($numb > $maks){
        $maks = $numb;
    }
}

echo($maks);
echo("\n");

// Latihan 3
$fruits1 = ["apel", "jeruk", "mangga", "pisang", "anggur"];
$fruits2 = ["mangga", "pisang"];
var_dump($fruits1);
echo(count($fruits1). " " . "\n");
$combine = array_merge($fruits1, $fruits2);
print_r($combine);

// Latihan 4
$days = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
print_r($days);
unset($days[3]);
print_r($days);

// Latihan 5
$animals = ["kucing", "anjing", "kelinci"];
$animals [] = "ikan";
foreach ($animals as $animal){
    echo $animal. "\n";
}

// Latihan 6
$angka = [1, 2, 3, 4, 5];
$reverse = array_reverse($angka);
print_r($reverse);

// Latihan 7
$cities = ["Jakarta", "Bandung", "Surabaya", "Yogyakarta", "Medan"];
echo($cities[1] . "\n");

// Latihan 8
$colors = ["merah", "biru", "hijau", "kuning"];
$colors[2] = "ungu";
print_r($colors);

// Latihan 9
$listNumbers = [1, 2, 3, 2, 4, 1, 5, 2, 3];
$frec = array_count_values($listNumbers);
print_r($frec);

// Latihan 10
$maksimal = [23, 45, 12, 78, 56, 89, 34];
$bigNumber = max($maksimal);
print_r($bigNumber);

// Latihan 11
$numArray = [9, 3, 5, 7, 2];
sort($numArray);
print_r($numArray);