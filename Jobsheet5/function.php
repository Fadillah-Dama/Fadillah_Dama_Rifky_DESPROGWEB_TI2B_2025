<?php

    function perkenalan($nama, $salam="Assalamualaikum") {
        echo "$salam, ";
        echo "Perkenalkan, nama saya $nama <br/>";
        echo "Senang berkenalan dengan anda. <br/>";
    }

    // calling the function
    perkenalan("Dama", "Hello");

    echo "<hr>";

    $saya = "Amanda";
    $ucapanSalam = "Selamat pagi";

    // try call the function again
    perkenalan($saya);

?>

