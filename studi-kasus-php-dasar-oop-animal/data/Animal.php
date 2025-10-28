<?php

class Animal {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function makeSound(): string {
        return "Saya Bersuara ....";
    }

    public function getName(): string {
        return $this->name;
    }

    public function introduce(): void {
        echo "Hallo nama saya {$this->name}. " . $this->makeSound() . PHP_EOL;
    }
}
