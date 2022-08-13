<?php

for ($counter = 1; $counter <=10  ; $counter++) { 
    echo "loop ke $counter" . PHP_EOL;
}

for ($counter = 10; $counter >=1  ; $counter--) :
    echo "loop ke $counter" . PHP_EOL;
endfor;