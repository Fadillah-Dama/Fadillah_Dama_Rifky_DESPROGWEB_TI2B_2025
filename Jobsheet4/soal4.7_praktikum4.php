<?php
    $harga = 120000;
    $diskon = 20/100;

    // perhitungan harga setelah diskon
    $hargaDiskon = $harga - ($harga * $diskon);

    echo "Harga asli: $harga <br>";
    echo "Diskon 20%: " . ($harga * $diskon) . "<br>";
    echo "Harga Diskon: $hargaDiskon";
?>