<?php

echo "Baris\nbaru <br>"; //menghasilkan baris baru
echo 'Baris\nbaru <br>'; //tidak menghasilkan baris baru karena berada pada ‘…’
echo "Halo\rDunia <br>"; //menghasilkan karakter carriage-return
echo 'Halo\rDunia <br>'; //tidak menghasilkan carriage-return karena berada pada ‘…’

echo "<pre>Halo\tDunia !</pre>"; //mengahasilkan karakter tab
echo '<pre>Halo Dunia !</pre>'; //tidak menghasilkan karakter tab karena berada pada ‘…’

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //menampilkan tanda petik dua
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //menampilkan tanda petik

?>