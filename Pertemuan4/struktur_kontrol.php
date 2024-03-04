<?php
/*
Membuat file baru bernama struktur_kontrol.php
*/
/*
Langkah 2: menambahkan kode program pada file struktur_kontrol.php
*/
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<hr>";

/*
Langkah 6: menambahkan kode program pada file struktur_kontrol.php
*/
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<hr>";

/*
Langkah 10: menambahkan kode program pada file struktur_kontrol.php
*/
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah $jumlahBuah buah.";

echo "<hr>";

/*
Langkah 14: menambahkan kode program pada file struktur_kontrol.php
*/
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<hr>";

/*
Langkah 18: menambahkan kode program pada file struktur_kontrol.php
*/
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<hr>";

/*
Ada soal cerita : Ada seorang guru ingin menghitung total nilai dari 10 siswa 
dalam ujian matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan 
nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)
*/
// Daftar nilai dari 10 siswa
$nilaiSiswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Mengurutkan nilai siswa dari terendah ke tertinggi
sort($nilaiSiswa);

// Menginisialisasi total nilai dengan 0
$totalNilai = 0;

// Menghitung total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}

// Menampilkan hasil
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai";

echo "<hr>";

/*
Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan 
harga Rp 120.000. Toko tersebut menawarkan diskon sebesar 20% untuk pembelian 
di atas Rp 100.000. Bantu pelanggan ini untuk menghitung harga yang harus dibayar 
setelah mendapatkan diskon.
*/
// Harga produk
$hargaProduk = 120000;

// Batas minimal pembelian untuk mendapatkan diskon
$batasDiskon = 100000;

// Persentase diskon
$diskonPersen = 20;

// Menghitung harga setelah diskon
if ($hargaProduk > $batasDiskon) {
    // Menghitung jumlah diskon
    $diskon = $hargaProduk * ($diskonPersen / 100);
    
    // Menghitung harga setelah diskon
    $hargaSetelahDiskon = $hargaProduk - $diskon;
    
    echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . PHP_EOL;
} else {
    echo "Harga yang harus dibayar: Rp " . number_format($hargaProduk, 0, ',', '.') . PHP_EOL;
}

echo "<hr>";

/*
Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka 
dalam permainan. Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. Dan baris kedua 
“Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
*/
// Total skor pemain
$skor = 700;

// Hadiah tambahan jika skor lebih dari 500
$hadiahTambahan = $skor > 500 ? "YA" : "TIDAK";

// Menampilkan total skor pemain
echo "Total skor pemain adalah: $skor <br>";

// Menampilkan apakah pemain mendapatkan hadiah tambahan
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>