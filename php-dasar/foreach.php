<?php

$names = ["Dandi", "Rasyid"];
for ($i = 0; $i < count($names); $i++){
    echo "Ini index ke - $i = " . $names[$i] . PHP_EOL; 
}

foreach ($names as $name){
    echo "Hallo $name " . PHP_EOL;
}

foreach ($names as $index => $name){
    echo "Ini data ke - $index = " . $name . PHP_EOL;
}

$person = [
    "first_name" => "Dandi",
    "last_name" => "Rasyid",
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}