<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Dandi Rasyid";
$student1->value = 100;

$student1("Dandi Rasyid", 1, true, 100, "Syafira");