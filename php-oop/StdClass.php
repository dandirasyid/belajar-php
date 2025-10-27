<?php

require_once "data/Person.php";

$array = [
    "firstname" => "Dandi",
    "lastname" => "Rasyid"
];

$object = (object) $array;
var_dump($object);

echo "First Name : $object->firstname" . PHP_EOL;
echo "Last Name : $object->lastname" . PHP_EOL;

$person = new Person ("Dandi", "Jakarta");
$personObj = (object) $person;
var_dump($personObj);