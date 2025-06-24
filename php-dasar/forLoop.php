<?php
// Loop tanpa henti
// for( ; ; ){
//     echo 'Ini adalah for loop' . PHP_EOL;
// }

// Perulangan dengan kondisi
// $counter = 1;
// for(; $counter <= 10; ){
//     echo 'ini adalah for loop ke-' . $counter . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan init, kondisi, dan post statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini counter ke - $counter" . PHP_EOL;
}

// Sintaks alternatif
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Ini counter $counter" . PHP_EOL;
endfor;

// Latihan 1 | Membuat bilangan ganjil kurang dari 20
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo PHP_EOL;

// Latihan 2 | Membuat faktorial dari angka 5
$angka = 5;
$faktorial = 1;
for ($i = 1; $i <= $angka; $i++) {
    $faktorial *= $i;
}
echo "Faktorial dari $angka adalah $faktorial" . PHP_EOL;

// Latihan 3 | Membuat perkalian dengan for loop
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . PHP_EOL;
    }
    echo PHP_EOL;
}

// Latihan 4 | Menjumlahkan deret bilangan genap
$jumlah = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $jumlah += $i;
}
echo "Jumlah deret bilangan dari angka 2 sampai 100 adalah $jumlah" . PHP_EOL;

// Latihan 5 | Segitiga bintang 5 baris
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}

// Latihan 6 | Menampilkan 10 angka pertama dari deret Fibonacci
$n = 10;
$angka1 = 0;
$angka2 = 1;

for ($i = 0; $i < $n; $i++) {
    echo $angka1 . " ";
    $hasil = $angka1 + $angka2;
    $angka1 = $angka2;
    $angka2 = $hasil;
}
