<?php 
goto a;
echo "Hello World" . PHP_EOL;

a: 
echo "Hello A" . PHP_EOL;

$counter = 1;
while (true) { 
    echo "loop ke $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto ends;
    }
}

ends: 
echo "End Loop";