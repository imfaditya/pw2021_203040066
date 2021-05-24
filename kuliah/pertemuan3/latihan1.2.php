<?php 
    // Imam Faraz Aditya
    // 203040066
    // github.com/imfaditya/pw2021_203040066
    // Pertemuan 3 (13-02-2021)
    // Pertemuan kali ini membahas tentang struktur kendali pada PHP
    // Implementasi pengulangan for membuat tabel 5 kolom 3 baris
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
        for($i=1; $i<=3; $i++){
            echo "<tr>";
            for($x=1; $x<=5; $x++){
                echo "<td>";
                echo "$i, $x";
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>