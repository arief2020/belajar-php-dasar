<?php
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1234);

echo "Binary : ";
var_dump(0b101011);


echo "underscore in number";
var_dump(1_000_989_823);

echo "floating point : ";
var_dump(1.231);

echo "floating point with e notation: ";
var_dump(1.2e3); //1.2 x 1000

echo "floating point with e- notation: ";
var_dump(1.2e-3); //1.2 x 0,001

echo "underscore floating point with e- notation: ";
var_dump(1_020.2e-3); //1020 x 0,001

echo "interger overflow : ";
var_dump(99999999999982192123232);