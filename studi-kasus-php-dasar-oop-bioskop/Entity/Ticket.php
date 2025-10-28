<?php

namespace Entity;

class Ticket {
    private Customer $customer;
    private Movie $movie;
    private int $quantity;

    public function __construct(Movie $movie, Customer $customer, int $quantity) {
        $this->customer = $customer;
        $this->movie = $movie;
        $this->quantity = $quantity;
    }

    public function totalPrice(): int {
        return $this->movie->getPrice() * $this->quantity;
    }

    public function printTicket(): void {
        echo "Tiket : " . $this->movie->getTitle() . PHP_EOL;
        echo "Atas Nama : " . $this->customer->getName() . PHP_EOL;
        echo "Jumlah : " . $this->quantity . PHP_EOL;
        echo "Total Harga : " . number_format($this->totalPrice(), 0, ",", ".") . PHP_EOL;
        echo str_repeat("-", 40) . PHP_EOL;
    }
}
