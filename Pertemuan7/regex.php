<?php
$pattern = '/[a-z]/';  //cocokkan huruf kecil.
$text = 'This is a sample text.';
if (preg_match($pattern, $text)) { /*digunakan untuk memeriksa 
    apakah pola yang didefinisikan dalam $pattern cocok dengan 
    teks dalam variabel $text.*/
    echo "huruf kecil ditemukan !";
} else {
    echo "tidak ada huruf kecil !";
}
?>