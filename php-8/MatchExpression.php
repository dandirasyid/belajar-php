<?php

$value = "A";
$result = "";

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Selamat! Anda Lulus Ujian";
        break;
    case "D":
        $result = "Maaf! Anda Belum Lulus Ujian";
        break;
    case "E":
        $result = "Mungkin Anda Salah Jurusan";
        break;
    default:
        $result = "Nilai Tidak Dapat Diketahui";
}

echo $result . PHP_EOL;

$result = match ($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda Salah Jurusan",
    default => "Nilai Tidak Diketahui"
};

echo $result . PHP_EOL;


$value = 900;
$result = match (true) {
    $value > 80 => "A",
    $value > 70 => "B",
    $value > 60 => "C",
    $value > 50 => "D",
    default => "E",
};

echo $result . PHP_EOL;

$name = "Mr. Dandi";
$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};

echo "$result $name" . PHP_EOL;
