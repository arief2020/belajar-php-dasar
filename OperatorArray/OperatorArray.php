<?php

$first = [
    "first_name" => "Muhammad Syaifullah"
];

$last = [
    "first_name" => "Muhammad Saifullah",
    "last_name" => "Al Arief"
];

// $full = $first + $last;
$full = $last + $first;
var_dump($full);


$a = [
    "first_name" => "Muhammad Saifullah",
    "last_name" => "Al Arief"
];

$b = [
    "last_name" => "Al Arief",
    "first_name" => "Muhammad Saifullah"
];

var_dump($a === $b);
var_dump($a == $b);
