<?php

namespace Helper;

class InputHelper {
    public static function input(string $info): string {
        echo "$info : " . PHP_EOL;
        return trim(fgets(STDIN));
    }
}
