<?php

$arr = [12,15,17,20,25,30,35,40,45,50];

$dewasa = 0;
$anak = 0;

foreach($arr as $a){
    if($a >= 17){
        $dewasa++;
    }else {
        $anak++;
    }
}
echo"jumlah kategori dewasa : $dewasa dan jumlah kategori anak anak : $anak ";


?>