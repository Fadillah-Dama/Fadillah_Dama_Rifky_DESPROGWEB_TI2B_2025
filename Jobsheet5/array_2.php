<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "Nama : {$Dosen['nama']} <br>";
            echo "Domisili : {$Dosen['domisili']} <br>";
            echo "Jenis Kelamin : {$Dosen['jenis_kelamin']}";

        ?>
        <br>
         
        <!-- tipe 1 -->
        <table border="1">
           <?php foreach ($Dosen as $row): ?>
                <tr>
                    <td><?= $row ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br>

        <!-- tipe 2 -->
        <table border="1">
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?= $Dosen['nama'] ?></td>
            <td><?= $Dosen['domisili'] ?></td>
            <td><?= $Dosen['jenis_kelamin'] ?></td>
        </tr>
    </table>
    </body>
</html>

