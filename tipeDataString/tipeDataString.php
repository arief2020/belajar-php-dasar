<?php
// single quote
echo 'Name : ';
echo 'Arief';

// double quote
echo "\n";
echo "Name : ";
echo "Arief";
echo "\n";
echo "Nama lengkap:\t Muhammad Syaifullah Al Arief";

// multiline String

// here doc
echo <<<EKO
ini menggunakan heredoc
ini adalah contoh string yang sangat
panjang, dan gak perlu ngetik enter secara 
manual, "bisa quote. ini adalah cara ketiga string

EKO;

// Nowdoc
echo <<<'EKO'
ini menggunakan nowdoc
ini adalah contoh string yang sangat
panjang, dan gak perlu ngetik enter secara 
manual, "bisa quote. ini adalah cara ketiga string
EKO;