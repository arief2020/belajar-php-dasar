<?php

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat anda lulus" . PHP_EOL;
}else if($nilai < 75 && $nilai >= 65 && $absen >= 75 ){
    echo "Lulus bersyarat";
}else {
    echo "Anda tidak lulus" . PHP_EOL;
}

if ($nilai >= 75 && $absen >= 75) :
    echo "Selamat anda lulus" . PHP_EOL ;
elseif ($nilai < 75 && $nilai >= 65 && $absen >= 75 ):
    echo "Lulus bersyarat";
else :
    echo "Anda tidak lulus" . PHP_EOL;
endif;