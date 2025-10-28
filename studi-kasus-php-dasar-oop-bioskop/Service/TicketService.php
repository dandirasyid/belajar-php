<?php

namespace Service;

use Entity\Customer;
use Entity\Movie;
use Entity\Ticket;

class TicketService {
    public function orderTicket(Movie $movie, Customer $customer, int $quantity): Ticket {
        return new Ticket($movie, $customer, $quantity);
    }
}
