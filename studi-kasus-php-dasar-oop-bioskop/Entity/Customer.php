<?php

namespace Entity;

class Customer {
    private string $name;
    private string $email;

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName():string{
        return $this->name;
    }
}
