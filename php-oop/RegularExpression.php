<?php

$matches = [];
$result = preg_match_all("/andi|rasy/i", "Dandi Rasyid", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat!");
var_dump($result);

$result = preg_split("/[\s,-]/", "Dandi Rasyid, Programmer-Zaman-now");
var_dump($result);
