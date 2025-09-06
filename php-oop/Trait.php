<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Dandi Rasyid");
$person->hello("Syafira");

$person->name = "Dandi";
var_dump($person);

$person->run();
