<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 7 (19-03-2021)
// Materi hari ini adalah GET&POST
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
<!-- Mengirim data nama ke halaman latihan 4 -->
    <form action="latihan4.php" method="POST">
    <!-- Jika action kosong maka data disimpan/dikirim ke halaman ini -->
        Masukkan nama : 
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>
    
    <br>

    <?php if(isset($_POST["kirim"])) : ?>
        <h1>Halo <?= $_POST["contoh"]; ?></h1>
    <?php endif; ?>
    
<!-- Mengirim data ke halaman ini -->
    <form method="POST">
        Masukkan sesuatu : 
        <input type="text" name="contoh">
        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>
</html>