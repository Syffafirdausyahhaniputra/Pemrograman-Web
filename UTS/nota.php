<?php
session_start();

if(!isset($_SESSION['rental_data'])) {
    header("Location: dashboard.php");
    exit();
}

$rental_data = $_SESSION['rental_data'];

// Hitung jumlah hari antara tanggal rental dan tanggal kembali
$tanggal_rental = new DateTime($rental_data['tanggal_rental']);
$tanggal_kembali = new DateTime($rental_data['tanggal_kembali']);
$selisih_hari = $tanggal_rental->diff($tanggal_kembali)->days;

// Hitung total harga rental
$harga_per_hari = 200000; // Harga per hari
$total_harga = $selisih_hari * $harga_per_hari;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Rental Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="logo">
            <h1>Nota Rental Mobil SYFFA</h1>
            <img src="rental_logo.png" alt="Rental Mobil">
        </div>
        <div class="nota">
            <p><strong>Nama:</strong> <?php echo $rental_data['nama']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $rental_data['alamat']; ?></p>
            <p><strong>Mobil yang Dirental:</strong> <?php echo $rental_data['mobil']; ?></p>
            <p><strong>Tanggal Rental:</strong> <?php echo $rental_data['tanggal_rental']; ?></p>
            <p><strong>Tanggal Dikembalikan:</strong> <?php echo $rental_data['tanggal_kembali']; ?></p>
            <p><strong>Total Harga:</strong> Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></p> <!-- Format harga -->
        </div>
        <a href="dashboard.php">Kembali ke Dashboard</a>
    </div>
</body>
</html>

<?php
// Hapus data rental dari session setelah nota ditampilkan
unset($_SESSION['rental_data']);
?>
