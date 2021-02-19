<?php 
    // Imam Faraz Aditya
    // 203040066
    // github.com/imfaditya/pw2021_203040066
    // Pertemuan 3 (13-02-2021)
    // Pertemuan kali ini membahas tentang struktur kendali pada PHP
?>
<?php 
    $x=22;
    if($x>20){
        echo ">20";
    }else if($x>10){
        echo ">10";
    }else{
        echo "<10";
    }
?>

<!-- Latihan aplikasi if -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color:silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i<=3; $i++): ?>
            <?php if ($i%2==1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for($x=0; $x<=5; $x++): ?>
                    <td><?php echo "$i, $x" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor;  ?>
    </table>
</body>
</html>