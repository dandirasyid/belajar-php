<?php
// Ternary operator untuk mempersingkat IF ELSE
$gender = "PRIA";
$hi = $gender == "PRIA" ? "hi, bro!" : "hi, nona!";
echo $hi . PHP_EOL;

// Latihan 1
$number = 11;
$total = ($number % 2 == 0) ? "Genap" : "Ganjil";
echo  "Angka $number adalah $total " . PHP_EOL;

// Latihan 2
$usia = 20;
$status = $usia >= 18 ? "Cukup Umur" : "Belum Cukup Umur";
echo "Umur anda yaitu $usia tahun, Anda $status" . PHP_EOL;

// Latihan 3
$bilangan = 10;
$hasil = ($bilangan > 0) ? "Positif" : ($bilangan < 0 ? "Negatif" : "Nol");
echo "Angka $bilangan merupakan bilangan $hasil" . PHP_EOL;

// Latihan 4
$nilai = 70;
$hasil_ujian = $nilai >= 70 ? "Selamat, Anda Lulus Ujian" : "Anda Belum Lulus Ujian";
echo $hasil_ujian . PHP_EOL;

// Latihan 5
$tahun = 2025;
$kabisat = ($tahun % 4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0)) ? "Tahun Kabisat" : "Bukan Tahun Kabisat";
echo "Tahun $tahun merupakan $kabisat" . PHP_EOL;

// Latihan 6
$belanja = 100000;
$diskon = ($belanja >= 100000) ? "Mendapatkan Diskon 10%" : "Tidak Mendapatkan Diskon";
echo "Anda $diskon" . PHP_EOL;

// Latihan 7
$berat = 70;
$tinggi = 1.75;
$bmi = $berat / ($tinggi * $tinggi);
$kategori = ($bmi < 18.5) ? "Kurus" : (($bmi < 25) ? "Normal" : (($bmi < 30) ? "Gemuk" : "Obesitas"));
echo "BMI Anda adalah " . number_format($bmi, 2). " dengan kategori " . $kategori;