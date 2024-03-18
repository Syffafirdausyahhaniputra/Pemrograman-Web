<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="styleTable.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>
    <table>
        <tr>
            <th>Informasi</th>
            <th>Detail</th>
        </tr>
        <?php
            foreach ($Dosen as $key => $value) {
                echo "<tr>
                        <td>{$key}</td>
                        <td>{$value}</td>
                      </tr>";
            }
        ?>
    </table>
</body>
</html>