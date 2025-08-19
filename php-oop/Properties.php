<?php

require_once "data/Person.php";

$person = new Person("Dandi", "Depok");
$person->name = "Dandi Rasyid";
$person->address = "Jakarta";
$person->country = "Indonesia";

echo "Nama : {$person->name}" . PHP_EOL;
echo "Alamat : {$person->address}" . PHP_EOL;
echo "Negara : {$person->country}" . PHP_EOL;

$person2 = new Person("Syafira", "Depok");
$person2->name = "Syafira Anindita Maharani";
$person2->address = "Depok";
$person2->country = "Indonesia";

echo "Nama : {$person2->name}" . PHP_EOL;
echo "Alamat : {$person2->address}" . PHP_EOL;
echo "Negara : {$person2->country}" . PHP_EOL;
