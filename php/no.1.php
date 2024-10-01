<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <p>Masukkan teks:</p>
        <input type="text" name="inputTeks" />
        <button type="submit">Cek</button>
    </form>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $teks = $_POST['inputTeks'];     
            //buat mencokan angka dari input ke variabel text
            preg_match_all('/\d/', $teks, $matches);
            //logic buat ngolah data preg_match yang diatas
            if (!empty($matches[0])) {
                $angkaTerdapat = implode(", ", $matches[0]);
                echo "teks mengandung angka : " . $angkaTerdapat;
            } else {
                echo "teks tidak mengandung angka.";
            }
        }
        ?>
    </p>
</html>