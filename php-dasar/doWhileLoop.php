<?php

/**
 * Do while adalah perulangan yang mirip dengan while
 * Perbedaannya yaitu hanya pada pengecekan kondisi
 * Pengecekan kondisi while loop dilakuka di awal sebelum perulangan, sedangkan do while loop dilakukan setelah perulangan
 * Sehingga, ketika menjalankan do while loop minimal pasti 1x perulangan dilakukan walaupun tidak bernilai true
 * Biasanya untuk soal tanya jawab
 */

$counter = 1;
do {
    echo "Ini perulangan do While ke - " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 10);
