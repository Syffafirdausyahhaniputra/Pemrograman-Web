<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text); /* digunakan 
untuk mencari setiap kecocokan dengan pola dalam string $text dan 
menggantinya dengan string pengganti yang ditentukan dalam variabel 
$replacement. */
echo $new_text; //output: "i like banana pie"
?>