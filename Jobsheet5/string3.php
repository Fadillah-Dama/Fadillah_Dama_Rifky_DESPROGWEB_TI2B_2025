<?php

    $pesan = "Saya arek malang";
     # ubah variabel $pesan menjadi array dengan explode
     $pesanPerkata = explode(" ", $pesan);
     # ubah setiap kata menjadi kebalikannya
     $pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
     # gabungkan kembali array menjadi string dengan implode
     $pesan = implode(" ", $pesanPerkata);

     echo $pesan . "<br>";

?>
