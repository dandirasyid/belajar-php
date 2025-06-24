<?php

function foo() {
    echo "Foo" . PHP_EOL;
}

function bar() {
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hallo $finalName" . PHP_EOL;
}

function sampleName(string $name): string {
    return "Sampel $name" . PHP_EOL;
}

sayHello("Dandi", "strtoupper");
sayHello("Dandi", "strtolower");
sayHello("Dandi", "sampleName");
