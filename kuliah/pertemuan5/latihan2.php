<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 5 (06-03-2021)
// Pertemuan kali ini membahas Array pada bahasa pemrograman PHP
// Pengulangan pada array
?>
<?php 
// var_dump() dan print_r() tidak user friendly
// Untuk menampilkan isi array ke user, gunakan pengulangan
// for -- foreach
$numbers = [1,2,3,4,5,6,7,88,89];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            line-height: 50px;
            text-align: center;
            margin: 3px;
            float: left;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
<!-- Cara pertama : for -->
    <?php for($i = 0; $i < count($numbers); $i++) : ?>
        <div class="kotak"><?php echo $numbers[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

<!-- Cara kedua : foreach templating-->
    <?php foreach( $numbers as $number ) : ?>
        <div class="kotak"><?= $number ?></div>
    <?php endforeach; ?>
    
    <div class="clear"></div>

<!-- Cara ketika : foreach tanpa templating-->
    <?php foreach( $numbers as $number ) { ?>
        <div class="kotak"><?= $number ?></div>
    <?php } ?>


</body>
</html>



