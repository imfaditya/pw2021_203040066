<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1b</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i=1; $i<=5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>


        </tr>
        <!-- Body Table -->
        <?php for ($y=1; $y<=5; $y++) : ?>
        <tr>
            <th>Baris <?= $y; ?></th>
            <?php for ($z=1; $z<=5; $z++) : ?>
                <td>Kolom <?= $z; ?>, Baris <?= $y ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>