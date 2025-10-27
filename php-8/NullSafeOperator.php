<?php

class Address {
    public ?string $country;
}

class User {
    public ?Address $address;
}

function getCountry(?User $user): ?string {
    return $user?->address?->country;
}

$user = new User();
$user->address = new Address();
$user->address->country = "Indonesia";
echo getCountry($user) . PHP_EOL;
