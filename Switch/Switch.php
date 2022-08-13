<?php
$nilai = "Z";
switch ($nilai) {
    case "A":
    case "B":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "C":
        echo "Anda lulus bersyarat" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "anda salah kelas" . PHP_EOL;
}
switch ($nilai) :
    case "A":
    case "B":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "C":
        echo "Anda lulus bersyarat" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "anda salah kelas" . PHP_EOL;
endswitch;