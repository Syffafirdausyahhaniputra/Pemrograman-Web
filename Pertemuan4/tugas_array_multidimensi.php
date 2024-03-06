<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; /* tambah border */
            padding: 10px; /* menambahkan padding dalam border */
            max-width: 300px; /* lebar maksimal border */
        }
        .student-avatar {
            margin-right: 20px;
            width: 100px; /* Ukuran gambar yang lebih kecil */
            max-width: 100px; /* Lebar maksimum gambar avatar */
        }
        .student-details {
            display: flex;
            flex-direction: column;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>

    <?php
        // Array multidimensi untuk menyimpan data mahasiswa
        $mahasiswa = array(
            array(
                "nama" => "Mahiru Shiina",
                "nim" => "1234567",
                "jurusan" => "Teknik Kimia",
                "email" => "mahirushiina@gmail.com",
                "avatar" => "mahirushiina.jpg"
            ),
            array(
                "nama" => "Amane Fujimiya",
                "nim" => "9123124",
                "jurusan" => "Teknik Listrik",
                "email" => "amanefujimiya@gmail.com",
                "avatar" => "amanefujimiya.jpg"
            ),
            array(
                "nama" => "Kyoko Hori",
                "nim" => "2333425",
                "jurusan" => "Manajemen Keuangan",
                "email" => "kyokohori@gmail.com",
                "avatar" => "kyokohori.jpg"
            ),
            array(
                "nama" => "Izumi Miyamura",
                "nim" => "9543753",
                "jurusan" => "Teknik Industri",
                "email" => "izumimiyamura@gmail.com",
                "avatar" => "izumimiyamura.jpg"
            ),
            array(
                "nama" => "Ishigami Senku",
                "nim" => "3147857",
                "jurusan" => "Teknik Kimia",
                "email" => "ishigamisenku@gmail.com",
                "avatar" => "ishigamisenku.jpg"
            )
        );

        // Loop untuk menampilkan data mahasiswa
        foreach ($mahasiswa as $mhs) {
            echo '<div class="student-container">';
            echo '<img src="' . $mhs["avatar"] . '" alt="Avatar ' . $mhs["nama"] . '" class="student-avatar">';
            echo '<div class="student-details">';
            echo '<p><span class="symbol">◉</span> Nama: ' . $mhs["nama"] . '</p>';
            echo '<p><span class="symbol">◉</span> NIM: ' . $mhs["nim"] . '</p>';
            echo '<p><span class="symbol">◉</span> Jurusan: ' . $mhs["jurusan"] . '</p>';
            echo '<p><span class="symbol">◉</span> Email: ' . $mhs["email"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    ?>

</body>
</html>