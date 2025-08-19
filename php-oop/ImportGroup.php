<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe as help};

$conflict = new Conflict1();
$dump = new Dummy();
$sample = new Sample();

help();
