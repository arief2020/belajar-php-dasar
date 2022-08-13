<?php
function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Arief", "strtoupper");
sayHello("Arief", "strtolower");
sayHello("Arief", function (string $name) {
    return strtoupper($name);
});
sayHello("Arief", fn($name) => strtolower($name));