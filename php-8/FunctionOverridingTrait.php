<?php

trait SampleTrait {
    public abstract function sampleFunction(string $name): string;
}

class SampleClass {
    use SampleTrait;

    public function sampleFunction(string $name): string {
        return $name . PHP_EOL;
    }
}

$sample = new SampleClass();
echo $sample->sampleFunction("Dandi");
