<?php

function sayHello(string $first, string $last) {
    echo "Hello $first $last";
}

$sayHello = sayHello(last: "Rasyid", first: "Dandi");
echo $sayHello;