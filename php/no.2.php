<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompe Jam Kerja</title>
</head>
<body>
    <form method="post">
        <label for="jamKerja">Masukkan Jam Kerja:</label>
        <input type="number" id="jamKerja" name="jamKerja">
        <button type="submit">Submit</button>
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jamKerja = $_POST["jamKerja"];
    kompe($jamKerja);
}

function kompe($jamKerja){
    $jam = 8;
    $kompePertama = 50000;
    $kompeSelanjutnya = 25000;
    $jam_lembur = $jamKerja - $jam;

    echo "Lama jam kerja: " . $jamKerja . "<br>";

    if($jamKerja > $jam){
        echo "Jam lebih: " . ($jam_lembur) . "<br>";
        
        if($jam_lembur == 1){
            echo "Jumlah kompe: Rp" . $kompePertama . "<br>";
        } else {
            $kompe = $kompePertama + ($jam_lembur - 1) * $kompeSelanjutnya;
            echo "Jumlah kompe adalah: Rp" . $kompe . "<br>";
        }

    } else {
        echo "Tidak ada kompe.<br>";
    }
}

?>
</body>
</html>
