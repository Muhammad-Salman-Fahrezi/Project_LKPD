<?php
    $data = [80, 90, 75, 100, 85, 100, 100];
    $cari = 100;

    $jumlah = array_count_values ($data) [$cari];
    
    echo "Data yang dicari adalah " . $cari . " dan berjumlah sebanyak " . $jumlah;

?>
