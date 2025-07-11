<?php
function sayHello(string $name, callable $filter){
    $filterName = call_user_func($filter, $name);
    echo "Hallo $filterName" . PHP_EOL;
}
sayHello("Syafira", "strtoupper");
sayHello("Dandi", "strtolower");
sayHello("Dita", function(string $name): string{
    return strtolower($name);
});
sayHello("Rasyid", fn($name) => strtoupper($name));