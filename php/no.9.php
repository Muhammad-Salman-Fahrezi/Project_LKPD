<?php
function pecahUang($jumlah) {
    $uang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    foreach ($uang as $nilai) {
        $jumlah_pecahan = intdiv($jumlah, $nilai);
        if ($jumlah_pecahan > 0) {
            echo "{$nilai} = {$jumlah_pecahan} <br>";
        }
        $jumlah %= $nilai;
    }
}

pecahUang(147000);


?>  