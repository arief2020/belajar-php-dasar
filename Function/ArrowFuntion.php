<?php

$firstname = "Muhammad Syaifullah";
$lastName = "Al Arief";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloEko();

$sayHelloName = fn() => "Hello $firstname $lastName" . PHP_EOL;

echo $sayHelloName();