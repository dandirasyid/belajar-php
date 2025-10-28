<?php

require_once __DIR__ . "/data/Animal.php";

class Dog extends Animal {
    public function makeSound(): string {
        return "GUK GUK GUK";
    }
}
