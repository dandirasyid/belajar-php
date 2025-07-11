<?php
$name = "Dandi"; //Global scope

function sayHello() {
    global $name; //global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"];
}

sayHello();
