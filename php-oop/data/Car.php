<?php

namespace Data;

interface HasBrand {
    function hasBrand(): string;
}

interface IsMaintenance {
    function isMaintenance(): bool;
}

interface Car extends HasBrand {
    function drive(): void;
    function getTire(): int;
}

class LandCruiser implements Car,  IsMaintenance {
    public function drive(): void {
        echo "Driving Land Cruiser is Fun" . PHP_EOL;
    }

    public function getTire(): int {
        return 4;
    }

    public function hasBrand(): string {
        return "Toyota";
    }

    public function isMaintenance(): bool {
        return false;
    }
}
