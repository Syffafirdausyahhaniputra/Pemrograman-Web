<?php
$pattern = '/go{2,3}d/'; //cocokkan "god", "good", "gooood", dll.
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}
?>