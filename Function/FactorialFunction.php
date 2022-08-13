<?php

function factorialFunction (int $value): int{
    $total = 1;

    for($i = 1 ; $i<=$value; $i++){
        $total *= $i;
    }

    return $total;

}

var_dump(factorialFunction(5));
var_dump(1*2*3*4*5);

echo "ini menggunakan rekursive funtion" .PHP_EOL;

function factorialRekursive (int $value): int{
    if ($value == 1) {
        return 1;
    }else{
        return $value * factorialRekursive($value - 1);
    }

}

var_dump(factorialRekursive(5));

    echo "ini error memory rekursive funtion" .PHP_EOL;
function loop(int $value) {
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop $value" . PHP_EOL;
        loop($value -1);
    }
    
}

var_dump(loop(3000000));