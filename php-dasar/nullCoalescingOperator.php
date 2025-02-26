<?php

// Biasanya pada saat pengecekan menggunakan isset
$data = [
    "action" => "Create",
];
// if(isset($data["action"])){
//     $action = $data["action"];
// }else{
//     $action = "Nothing";
// }

// Jika menggunakan Null Coalescing Operator dengan menambahkan ??
$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;
