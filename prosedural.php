<?php
 $panjang1 = 10;
 $lebar1 = 5;
 $tinggi1 = 5;

 function hitunhVolume($p, $l, $t) {
     $volume = $p * $l * $t;
     return $volume;
 }

 echo "Volume Balok 1: " . hitunhVolume($panjang1, $lebar1, $tinggi1);
?>