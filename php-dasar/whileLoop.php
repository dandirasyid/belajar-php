<?php
$counter = 1;
while ($counter <= 10) {
    echo "ini adalah angka ke - $counter" . PHP_EOL;
    $counter++;
}

// Alternatif sintaks
$count = 1;
while ($count <= 20):
    echo "Count : " . $count . PHP_EOL;
    $count++;
endwhile;

// Latihan 1 | Menampilkan angka 10 sampai 1 (mundur)
$reverse = 10;
while ($reverse >= 1) {
    echo $reverse . " ";
    $reverse--;
}
echo PHP_EOL;

// Latihan 2 | Menjumlahkan deret bilangan ganjil dari 1 - 50
$number = 1;
$jumlah = 0;
while ($number <= 50) {
    if ($number % 2 != 0) {
        $jumlah += $number;
    }
    $number++;
}
echo "Jumlah deret bilangan ganjil dari 1 sampai 50 adalah " . $jumlah . PHP_EOL;

// Latihan 3 | Menampilkan kelipatan 7 dari 7 sampai 70
$multiple = 7;
while ($multiple <= 70) {
    echo $multiple . " ";
    $multiple += 7;
}
echo PHP_EOL;

// Latihan 4 | Menampilkan jumlah karakter dalam kalimat
$kalimat = "Belajar PHP itu menyenangkan";
$sum = 0;
$i = 0;

while (isset($kalimat[$i])) {
    $sum++;
    $i++;
}

echo "Jumlah karakter: " . $sum . PHP_EOL;

// Latihan 5 | Mencetak deret angka dari 1 sampai 100 yang kelipatan 3 dan 5
$deret = 1;
while ($deret <= 100) {
    if ($deret % 15 == 0) {
        echo $deret . " ";
    }
    $deret++;
}
echo PHP_EOL;

// Latihan 6 | Menjumlahkan angka 1 sampai N (N=10)
$total = 0;
$n = 1;
while ($n <= 10) {
    $total += $n;
    $n++;
}
echo "Hasil penjumlahan angka 1 sampai 10 adalah " . $total . PHP_EOL;
