<?php

class Data implements IteratorAggregate {
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";

    // public function getIterator(): Traversable {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "forth" => $this->forth,
    //     ];

    //     return new ArrayIterator($array);
    // }

    public function getIterator(): Iterator {
        yield "first" => $this->first;
        yield  "second" => $this->second;
        yield  "third" => $this->third;
        yield  "forth" => $this->forth;
    }
}

$data = new Data();
foreach ($data as $properties => $value) {
    echo "$properties : $value" . PHP_EOL;
}
