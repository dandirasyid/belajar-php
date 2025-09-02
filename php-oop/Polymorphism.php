<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Dandi");
var_dump($company);

$company->programmer = new BackendProgrammer("Rasyid");
var_dump($company);

$company->programmer = new FrontendProgrammer("Syafira");
var_dump($company);

// Polymorphism di function argument
sayHelloProgrammer(new Programmer("Dandi Rasyid"));
sayHelloProgrammer(new BackendProgrammer("Dandi Rasyid"));
sayHelloProgrammer(new FrontendProgrammer("Syafira Anindita Maharani"));
