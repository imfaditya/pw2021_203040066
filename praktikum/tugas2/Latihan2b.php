<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    $jawabanIsset = "Isset adalah = Function yang digunakan untuk menentukan apakah suatu variabel telah di set dan tidak NULL<br><br>";
    $jawabanEmpty = "Empty adalah = Function yang digunakan untuk menentukan apakah suatu variabel kosong atau tidak";
    //Sumber : https://www.virendrachandak.com/techtalk/php-isset-vs-empty-vs-is_null/

    function soal($style){
        return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b 203040066</title>
    <style>
    .style{
        border: 1px solid black;
        box-shadow: 0 0 5px rgba(0, 0, 0, 20);
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
    
</body>
</html>