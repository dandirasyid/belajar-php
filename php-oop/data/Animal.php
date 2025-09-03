<?php

namespace Data;

abstract class Animal {
    public string $name;
    abstract public function run(): void;
}

class Cat extends Animal {
    public function run(): void {
        echo "Cat $this->name is run in the park" . PHP_EOL;
    }
}

class Dog extends Animal {
    public function run(): void{
        echo "Dog $this->name is run in the park" . PHP_EOL;
    }
}
