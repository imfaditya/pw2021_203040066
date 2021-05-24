<?php 
    // Imam Faraz Aditya
    // 203040066
    // github.com/imfaditya/pw2021_203040066
    // Pertemuan 4 (26-02-2021)
    // Pertemuan kali ini membahas beberapa function yang ada di PHP
    // User defined function
?>
<?php 
    //Membuat function disisni
    // biasnaya mengembalikan / return
    function salam($nama, $waktu){
        return "Selamat $waktu, $nama!";
    }


    // function juga bisa menggunakan nilai default dengan menggunakan format seperti ini
    // function salam($nama="Admin", $waktu="Datang"){
    //     return "Selamat $waktu, $nama!";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <?php 
    date_default_timezone_set("Asia/Jakarta");
    $waktu = date("H");
    if ($waktu < 10){
        $waktu = "Pagi";
    } else if ($waktu >= 10 && $waktu <14){
        $waktu = "Siang";
    } else if ($waktu >= 14 && $waktu <19){
        $waktu = "Sore";
    } else{
        $waktu = "Malam";
    }
    ?>
    <h1><?php echo salam("Imam", "$waktu"); ?></h1>
</body>
</html>
 