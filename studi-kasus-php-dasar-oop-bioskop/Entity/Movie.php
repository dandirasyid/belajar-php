<?php

namespace Entity;

class Movie {
    private string $title;
    private int $duration;
    private float $price;

    public function __construct(string $title, int $duration, float $price) {
        $this->title = $title;
        $this->duration = $duration;
        $this->price = $price;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getPrice(): float {
        return $this->price;
    }
}
