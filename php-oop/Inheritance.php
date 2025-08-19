<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Dandi Rasyid";
$manager->sayHello("Syafira");

$vp =  new VicePresident();
$vp->name = "Syafira Anindita Maharani";
$vp->sayHello("Dandi");
