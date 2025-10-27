<?php

function sayHello(Stringable $stringable): void {
    echo "Hallo {$stringable->__toString()}" . PHP_EOL;
}

class Person {
    public function __toString(): string {
        return "Dandi Rasyid";
    }
}

sayHello(new Person());
