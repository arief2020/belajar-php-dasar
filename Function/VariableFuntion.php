<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar() {
    echo "bar" . PHP_EOL;
}

$functionYangakanDipanggil = "foo";
$functionYangakanDipanggil();

$functionYangakanDipanggil = "bar";
$functionYangakanDipanggil();

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFuntion(string $name) {
    return "sample $name";
}

sayHello("Arief", "sampleFuntion");
sayHello("Arief", "strtoupper");
sayHello("Arief", "strtolower");