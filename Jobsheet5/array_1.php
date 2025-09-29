<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagus Nugraha"];

            echo $ListDosen[2] . "<br>";
            echo $ListDosen[0] . "<br>";
            echo $ListDosen[1] . "<br>";

            // Menampilkan array menggunakan loop
            foreach ($ListDosen as $Dosen) {
                echo $Dosen . "<br>";
            }
        ?>
    </body>
</html>
