<?php

use LDAP\Result;

function sum(int $first, int $second): int{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(110, 10);
var_dump($result);

function getFinalValue(int $value) : string{
    if ($value >= 80) {
        return "A";
    }else if($value >= 70){
        return "B";
    }else if($value >= 60){
        return "B";
    }else if($value >= 50){
        return "B";
    }else {
        return "E";
    }
}

$score = getFinalValue(80);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);
