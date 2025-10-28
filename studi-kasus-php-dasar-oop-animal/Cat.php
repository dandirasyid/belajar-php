<?php

require_once __DIR__ . "/data/Animal.php";

class Cat extends Animal {
    public function makeSound(): string {
        return "Meong Meong Meong";
    }
}
