<?php
    $nilaiSiswa = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90]
    ];

    // mencari rata-rata nilai
    $totalNilai = 0;
    $amount = 0;
    foreach ($nilaiSiswa as $nilai) {
        $totalNilai += $nilai[1];
    }
    $rataRata = $totalNilai / count($nilaiSiswa);
    echo "Rata-rata: {$rataRata} <br><br>";

    // mencari siswa yang nilainya di atas rata-rata
    $siswaDiatasRata = [];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai[1] > $rataRata) {
           echo "Nama: {$nilai[0]}    Nilai: {$nilai[1]} <br>";
        }
    }
?>