<?php
/*
Membuat file baru bernama operator.php
*/
/*
Langkah 2: menambahkan kode program pada file operator.php
*/
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

/*
Langkah 5: menambahkan kode program pada file operator.php
*/
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

/*
Langkah 8: menambahkan kode program pada file operator.php
*/
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

/*
Langkah 14: menambahkan kode program pada file operator.php
*/
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//Lengkapi kode program pada langkah 2 sehingga bisa menampilkan hasilnya dan rapi. 
echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Pembagian: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";
echo "<hr>";

//Lengkapi kode program pada langkah 5 sehingga bisa menampilkan hasilnya dan rapi. 
echo "Hasil Persamaan: " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Sama: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil atau Sama: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar atau Sama: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
echo "<hr>";

//Lengkapi kode program pada langkah 8 sehingga bisa menampilkan hasilnya dan rapi. 
echo "Hasil AND Logika: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR Logika: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A Logika: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B Logika: " . ($hasilNotB ? 'true' : 'false') . "<br>";
echo "<hr>";

//Lengkapi kode program pada langkah 11 sehingga bisa menampilkan hasilnya dan rapi. 
echo "Nilai awal a: $a <br>";
$a += $b;
echo "Setelah ditambah b, nilai a: $a <br>";
$a -= $b;
echo "Setelah dikurangi b, nilai a: $a <br>";
$a *= $b;
echo "Setelah dikali b, nilai a: $a <br>";
$a /= $b;
echo "Setelah dibagi b, nilai a: $a <br>";
$a %= $b;
echo "Setelah sisa bagi dengan b, nilai a: $a <br>";
echo "<hr>";

//Lengkapi kode program pada langkah 15 sehingga bisa menampilkan hasilnya dan rapi. 
echo "Hasil Identik: " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Identik: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
echo "<hr>";

/*
Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
Berapa persen kursi yang masih kosong di restoran tersebut?
*/
echo "Tugas Soal Cerita <br>";
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;
echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentaseKursiKosong, 2) . "%";
?>