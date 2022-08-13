<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$data = array("arief", 20, true);
var_dump($data);

$names = ["Muhammad", "Syaifullah", "Al Arief"];
var_dump($names);

$eko = array(
    "id" => "eko",
    "name" => "Eko khurniawan",
    "age" => 30,
    "address" => array(
        "city" => "jakarta",
        "country" => "Indonesia"
    )
);
var_dump($eko);

var_dump($eko["name"]);
var_dump($eko["address"]["country"]);
echo "\n";

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "jakarta",
        "country" => "indonesia"
    ]
];
var_dump($budi);