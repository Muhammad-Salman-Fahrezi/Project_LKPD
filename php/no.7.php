<?php

function hitungNama($namaPertama,$namaKedua){
    $pertama = strlen($namaPertama);
    $kedua = strlen($namaKedua);
    if($pertama < $kedua){
        echo $namaKedua . " memiliki jumlah karakter yang lebih banyak dari " . $namaPertama . " selisih angka : " . $kedua - $pertama . " Karakter";
    }else {
        echo $namaPertama . " memiliki jumlah karakter yang lebih banyak dari " . $namaKedua . " selisih angka : " . $pertama - $kedua .  " Karakter";
    }
}
hitungNama("Fema Flamelina Putri","Artasya Legina ");

?>