<?php

namespace Data\Traits;

trait SayGoodBye {
    public function goodBye(?string $name): void {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello {
    public function hello(?string $name): void {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait CanRun {
    public abstract function run(): void;
}

class ParentPerson {
    public function goodBye(?string $name): void {
        echo "Good bye in person" . PHP_EOL;
    }

    public function hello(?string $name): void {
        echo "Hello in person" . PHP_EOL;
    }
}

trait All {
    use SayGoodBye, SayHello, HasName, CanRun {
        // Bisa di oeverride
        // hello as private;
        // goodBye as private;
    }
}

class Person {
    use All;

    public function run(): void {
        echo "Person $this->name is running in the park" . PHP_EOL;
    }
}
