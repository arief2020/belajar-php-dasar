<?php
$name = "Eko";
$name = NULL;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "is name null ? ";
echo var_dump(is_null($name));
echo "\n";

$contoh = null;
unset($contoh);
$contoh = "khurniawan";
$contoh = null;

var_dump(isset($contoh));
