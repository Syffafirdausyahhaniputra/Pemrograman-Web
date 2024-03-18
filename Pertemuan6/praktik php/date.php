<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3> Date </h3>
        <?php 
            echo "Today is " . date("Y/m/d") . "<br>"; //menampilkan tahun/bulan/tanggal
            echo "Today is " . date("Y.m.d") . "<br>"; //menampilkan tahun.bulan.tanggal
            echo "Today is " . date("Y-m-d") . "<br>"; //menampilkan tahun-bulan-tanggal
            echo "Today is " . date("l") . "<br>"; //menampilkan hari
        ?>
    </body>
</html>