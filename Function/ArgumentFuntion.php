<?php
function sayHello ($name, $lastname, $keterangan = "ganteng") {
    echo "Hello $name $lastname keterangan $keterangan" . PHP_EOL;
}

sayHello("Muhammad Syaifullah", "Al Arief");

function sum(int $a, int $b){
    $total = $a + $b;
    echo "totalnya : $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
// sum([], [false])

function sumAll (...$values) {
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }

    echo "totalnya adalah $total";
}
$isiArray = [1,23,3,4,5,6];
sumAll(...$isiArray);
/*
// default funtion jangan di didepan
// function sayHello2 ($name = "arief", $lastname, $keterangan = "ganteng") {
//     echo "Hello $name $lastname keterangan $keterangan" . PHP_EOL;
// }
// sayHello2("Muhammad Syaifullah", "Al Arief");

*/
?>