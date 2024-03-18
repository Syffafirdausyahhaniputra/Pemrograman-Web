<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>"; //menampilkan panjang string
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>"; //menampilkan jumlah kata
echo "<p>" . strtoupper($loremIpsum) . "</p>"; //mengubah string menjadi kapital
echo "<p>" . strtolower($loremIpsum) . "</p>"; //mengubah string menjadi huruf kecil
?>