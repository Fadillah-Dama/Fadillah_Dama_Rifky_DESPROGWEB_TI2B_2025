<?php
    $nama = @$_GET['nama']; // tanda @ agar tidak ada error warning saat key kosong
    $usia = @$_GET['usia']; // tanda @ agar tidak ada error warning saat key kosong
    
    echo "Halo {$nama} ! Apakah benar anda berusia {$usia} tahun?";
?>
