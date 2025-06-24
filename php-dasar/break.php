<?php

/**
 * Break untuk menghentikan suatu case
 * Kalau di perulangan, break menghentikan seluruh pengulangan
 * Continue menghentikan perulangan saat ini berjalan, lalu akan melanjutkan perulangan selanjutnya
 */

 $counter = 1;
 while (true){
    echo "Ini while ke-$counter " . PHP_EOL;
    $counter++;

    if ($counter > 10){
        break;
    }
 }