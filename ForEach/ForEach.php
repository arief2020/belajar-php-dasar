<?php

$names = ["Muhammad", "Syaifullah", "Al Arief"];

for ($i=0; $i < count($names); $i++) { 
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

echo "dengan for each" . PHP_EOL;
foreach ($names as $name) {
    echo "ini data yang $name" . PHP_EOL;
}

$namas = ["firstname" =>"Muhammad", 
"midleName" =>"Syaifullah", 
"lastname" =>"Al Arief"];

foreach($namas as $key => $nama) {
    echo "ini key $key value nya $nama" . PHP_EOL;
}