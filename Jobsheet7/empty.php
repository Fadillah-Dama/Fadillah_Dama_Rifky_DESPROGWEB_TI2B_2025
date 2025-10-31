<?php
    $myArray = array(); // array kosong

    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong.<br>";
    } else {
        echo "Array terdefinisi dan tidak kosong.";
    }


    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong.";
    } else {
        echo "Variable terdefinisi dan tidak kosong.";
    }
?> 