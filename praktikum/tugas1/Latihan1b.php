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
    <title>Latihan 1b 203040066</title>
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
        <?php for ($i=1; $i<=5; $i++) : ?>
        <tr>
            <th>Baris <?= $i; ?></th>
            <?php for ($z=1; $z<=5; $z++) : ?>
                <td>Baris <?= $i ?>, Kolom <?= $z; ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
    <!-- 066 -->
</body>
</html>