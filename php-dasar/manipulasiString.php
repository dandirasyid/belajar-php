<?php
// Menghubungkan string dengan dot
$name = "Dandi Rasyid";
echo "Name : " . $name . PHP_EOL;
echo "Nilai : " . 100 . PHP_EOL;

// Melakukan konversi number ke string, dan sebaliknya. Jika data tidak valid, maka value-nya akan 0
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1000.01";
var_dump($valueFloat);

// Mengakses karakter, dan jangan mengakses melebihi indeks string seperti array karena akan error
$nama = "Dandi";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

// Variabel parsing
echo "Hallo nama saya $nama, selamat belajar PHP" . PHP_EOL;

// Curly Brace
echo "Hallo nama saya {$nama}'s, selamat belajar PHP" . PHP_EOL;