<?php

class Manager {
    var string $name;

    function sayHello(string $name): void {
        echo "Hi $name, nama saya adalah Manager {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager {
    function sayHello(string $name): void {
        echo "Hi $name, nama saya adalah VP {$this->name}" . PHP_EOL;
    }
}
