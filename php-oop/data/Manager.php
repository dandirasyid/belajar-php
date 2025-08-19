<?php

class Manager {
    var string $name;

    function sayHello(string $name): void {
        echo "Hi $name, nama saya adalah {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager {
}
