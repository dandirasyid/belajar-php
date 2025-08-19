<?php

require_once "data/Person.php";

$dandi = new Person("Dandi", "Depok");
$dandi->name = "Dandi Rasyid";
$dandi->sayHello("Syafira");

$syafira = new Person("Syafira", "Depok");
$syafira->name = "Syafira";
$syafira->sayHello(null);


$dandi->info();
$syafira->info();
