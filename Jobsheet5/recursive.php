<?php

    // display 1- 25 using recursive
    function tampilAngka(int $jumlah, int $indeks = 1) {
        echo "Perulangan ke-{$indeks} <br>";

        // call himself when indeks <= jumlah
        if ($indeks < $jumlah) {
            tampilAngka($jumlah, $indeks+1);
        }
    }

    tampilAngka(25);
?>
