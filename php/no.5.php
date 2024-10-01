
    <?php
    $bil1 = [81, 77, 65, 89, 55,12, 90, 86, 11];
    $bil2 = [77, 99, 55, 81, 45,90, 91, 98, 11];

    echo "Bilangan yang ada di kedua variabel";
    echo "<br>";
    $bilVariabel = array_intersect($bil1, $bil2);
    echo implode(',' , $bilVariabel);
    echo "<br>";

    echo "Bilangan yang tidak ada di kedua variabel";
    echo "<br>";
    $bilNoVariabel = array_diff($bil1,$bil2);
    echo implode('.' , $bilNoVariabel);
    ?>
