<?php

interface SayHello {
    function sayHello(): void;
}

$helloWorld = new class("Dandi Rasyid") implements SayHello {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
    public function sayHello(): void {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();
