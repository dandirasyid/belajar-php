<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// Ketika manggil object, harus memanggil namespace terlebih dahulu
$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

echo Helper\APPLICATION . PHP_EOL;
Helper\helpme();

// Global Namespace

// namespace {
//     require_once "data/Conflict.php";
//     require_once "data/Helper.php";

//     $conflict1 = new Data\One\Conflict();
//     $conflict2 = new Data\Two\Conflict();

//     echo Helper\APPLICATION . PHP_EOL;
//     Helper\helpme();
// }
