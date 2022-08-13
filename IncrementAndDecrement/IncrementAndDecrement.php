<?php

$a = 10;

$b = $a++;


var_dump($a);
var_dump($b);

// a = 11
$b = ++$a;
var_dump($a);
var_dump($b);