<?php

function sayHello(?string $name) {
    if ($name == null) {
        throw new Exception("Tidak Boleh Null");
    }

    echo "Hello $name " . PHP_EOL;
}

function sayHelloExpression(?string $name) {
    $result = $name != null ? "Sukses" : throw new Exception("Nilai Tidak Boleh Null");
    echo $result . PHP_EOL;
}

sayHello("Dandi Rasyid");
sayHelloExpression("Syafira Anindita Maharani");
