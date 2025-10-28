<?php

namespace Entity;

class Student {
    private string $name;
    private int $nim;

    public function __construct(string $name, int $nim) {
        $this->name = $name;
        $this->nim = $nim;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getNim(): int {
        return $this->nim;
    }
}
