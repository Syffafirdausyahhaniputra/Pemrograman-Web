<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3> Time </h3>
        <?php 
            date_default_timezone_set("asia/jakarta"); //mengatur waktu di area asia/jakarta
            echo date("h:i:sa"); //menampilkan jam:menit:detik(am/pm) 
        ?>
    </body>
</html>