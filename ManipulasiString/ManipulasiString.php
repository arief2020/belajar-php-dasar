<?php

$name = "Eko Kurniawan Khanedy";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInterger = (int)"100";
var_dump($valueInterger);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$valueFloat = (float)"salah";
var_dump($valueFloat);

$name = "Eko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello" . $name . ", Selamat belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat belajar2 PHP" . PHP_EOL;

$var = "var";
echo "this is {$var}s";