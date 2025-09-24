<?php
    $a = 10;
    $b = 5;

    // Operator Aritmatika
    echo "$a <br> $b";
    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b; 

    echo "Hasil Tambah ($a + $b) = $hasilTambah <br>";
    echo "Hasil Kurang ($a - $b) = $hasilKurang <br>";
    echo "Hasil Kali ($a * $b) = $hasilKali <br>";
    echo "Hasil Bagi ($a / $b) = $hasilBagi <br>";
    echo "Sisa Bagi ($a % $b) = $sisaBagi <br>";
    echo "Pangkat ($a ** $b) = $pangkat <br><br>";

    // Operator Perbandingan
    $hasilSama               = $a == $b;
    $hasilTidakSama          = $a != $b;
    $hasilLebihKecil         = $a < $b;
    $hasilLebihBesar         = $a > $b;
    $hasilLebihKecilSama     = $a <= $b;
    $hasilLebihBesarSama     = $a >= $b;

    echo "Hasil Perbandingan (a = $a, b = $b)<br><br>";

    echo "\$a == \$b : " . ($hasilSama ? "true" : "false") . "<br>";
    echo "\$a != \$b : " . ($hasilTidakSama ? "true" : "false") . "<br>";
    echo "\$a <  \$b : " . ($hasilLebihKecil ? "true" : "false") . "<br>";
    echo "\$a >  \$b : " . ($hasilLebihBesar ? "true" : "false") . "<br>";
    echo "\$a <= \$b : " . ($hasilLebihKecilSama ? "true" : "false") . "<br>";
    echo "\$a >= \$b : " . ($hasilLebihBesarSama ? "true" : "false") . "<br><br>";

    // Operator Logika
    $hasilAnd  = $a && $b;
    $hasilOr   = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil a && b : " . $hasilAnd . "<br>";
    echo "Hasil a || b : " . $hasilOr . "<br>";
    echo "Hasil !a : " . $hasilNotA . "<br>";
    echo "Hasil !b : " . $hasilNotB . "<br><br>";

    // Operator assignment gabungan
    $a += $b;
    $a -= $b;
    $a *= $b;
    $a /= $b;
    $a %= $b;

    $a = 10;
    $b = 5;
    $a += $b;
    echo "Hasil a += b : " . $a . "<br>";
    $a = 10;
    $b = 5;
    $a -= $b;
    echo "Hasil a -= b : " . $a . "<br>";
    $a = 10;
    $b = 5;
    $a *= $b;
    echo "Hasil a *= b : " . $a . "<br>";
    $a = 10;
    $b = 5;
    $a /= $b;
    echo "Hasil a /= b : " . $a . "<br>";
    $a = 10;
    $b = 5;
    $a %= $b;
    echo "Hasil a %= b : " . $a . "<br><br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil a === b : " . $hasilIdentik . "<br>";
    echo "Hasil a !== b : " . $hasilTidakIdentik . "<br>";
?>