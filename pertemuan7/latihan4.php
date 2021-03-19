<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 7 (19-03-2021)
// Materi hari ini adalah GET&POST
?>
<?php 
if(!isset($_POST["nama"])){
    header("Location: latihan3.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
</body>
</html>