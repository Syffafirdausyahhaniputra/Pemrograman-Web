// dashboard.php
<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Proses form rental
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $mobil = $_POST['mobil'];
    $tanggal_rental = $_POST['tanggal_rental'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

    // Simpan data rental dalam session untuk ditampilkan di halaman nota
    $_SESSION['rental_data'] = [
        'nama' => $nama,
        'alamat' => $alamat,
        'mobil' => $mobil,
        'tanggal_rental' => $tanggal_rental,
        'tanggal_kembali' => $tanggal_kembali
    ];

    // Redirect ke halaman nota
    header("Location: nota.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rental Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Hallo, <?php echo $_SESSION['username']; ?></h2>
        <h2>Welcome To</h2>
        
        <!-- Formulir Rental -->
        <div class="logo">
            <h1>Rental Mobil SYFFA</h1>
            <img src="rental_logo.png" alt="Rental Mobil">
        </div>
        <form id="rentalForm" action="" method="post">
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Nama" required>
            </div>
            <div class="input-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required>
            </div>
            <div class="input-group">
                <label for="mobil">Mobil yang Dirental</label>
                <input type="text" name="mobil" id="mobil" placeholder="Mobil yang Dirental" required>
            </div>
            <div class="input-group">
                <label for="tanggal_rental">Tanggal Rental</label>
                <input type="date" name="tanggal_rental" id="tanggal_rental" placeholder="Tanggal Rental" required>
            </div>
            <div class="input-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" placeholder="Tanggal Kembali" required>
            </div>
            <button type="submit">Rental</button>
        </form>


        <!-- Tombol Logout -->
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
