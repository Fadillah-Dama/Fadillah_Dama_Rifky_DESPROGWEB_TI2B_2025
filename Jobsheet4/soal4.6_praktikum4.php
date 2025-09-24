<?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

    sort($nilaiSiswa); // sort asc nilai

    array_shift($nilaiSiswa); // mengeluarkan nilai terkecil
    array_shift($nilaiSiswa);

    array_pop($nilaiSiswa); // menegeluarkan nilai terbesar
    array_pop($nilaiSiswa);

    $totalNilai = array_sum($nilaiSiswa);
    $rataNilai = $totalNilai / count($nilaiSiswa);

    echo "Total Nilai (tanpa 2 tertinggi & 2 terendah): $totalNilai <br>";
    echo "Rata-rata nilai (tanpa 2 tertinggi & 2 terendah): $rataNilai"

?>