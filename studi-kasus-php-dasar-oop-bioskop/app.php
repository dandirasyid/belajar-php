<?php

use Entity\Customer;
use Entity\Movie;
use Service\TicketService;

require_once __DIR__ . "/Entity/Customer.php";
require_once __DIR__ . "/Entity/Movie.php";
require_once __DIR__ . "/Entity/Ticket.php";
require_once __DIR__ . "/Service/TicketService.php";

// Inisialisasi Data
$movie1 = new Movie(title: "Avanger End Game", duration: 180, price: 50000);
$movie2 = new Movie(title: "Doctor Strange", duration: 200, price: 50000);

$customer = new Customer(name: "Dandi Rasyid", email: "dandirasyid@gmail.com");

$service = new TicketService();

// Pesan Tiket
$ticket = $service->orderTicket(customer: $customer, movie: $movie1, quantity: 2);

// Cetak Tiket

$ticket->printTicket();
