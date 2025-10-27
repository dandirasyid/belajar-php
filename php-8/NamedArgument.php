<?php

function sayHello(string $first, string $middle = "", string $last): void {
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello(last: "Maharani", first: "Syafira", middle: "Anindita");
sayHello(first: "Syafira", last: "Maharani");
