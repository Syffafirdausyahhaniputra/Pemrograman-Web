<?php
/*
Membuat file baru bernama variabel_konstanta.php
*/
/*
Langkah 3: menambahkan kode program pada file variabel_konstanta.php
*/
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

/*
Langkah 5: menambahkan kode program pada file variabel_konstanta.php
*/
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

/*
Langkah 6: menambahkan kode program pada file variabel_konstanta.php
*/
//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>