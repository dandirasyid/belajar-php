<?php

class Person {
    // Constant
    const AUTHOR = "DANDI RASYID";

    // Properties
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello($name) {
        if (is_null($name)) {
            echo "Hello, nama saya adalah {$this->name}" . PHP_EOL;
        } else {
            echo "Hallo $name, nama saya adalah {$this->name}" . PHP_EOL;
        }
    }

    function info() {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct() {
        echo "Object Person {$this->name} is destroyed" . PHP_EOL;
    }
}
