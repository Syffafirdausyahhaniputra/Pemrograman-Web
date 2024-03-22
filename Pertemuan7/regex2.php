<?php
$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if(preg_match($pattern,$text,$matches)){ /* digunakan untuk memeriksa 
    apakah pola yang didefinisikan dalam $pattern cocok dengan teks 
    dalam variabel $text. */
    echo "cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
?>