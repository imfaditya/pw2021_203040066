<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("Location : ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $mahasiswa = query ("SELECT * FROM furniture_items WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $mahasiswa["furniture_name"];  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-content has-text-centered">
                <p class="mt-5 title">
                    <?= $mahasiswa["furniture_name"];?>
                </p>
                <img src="../assets/<?= $mahasiswa["picture"];  ?>" alt="">
                <p class="subtitle pb-5 is-size-5"><?= $mahasiswa["description"];  ?></p>
            </div>
            <footer class="card-footer is-size-4">
                <p class="card-footer-item">
                <span>
                    <?= ubahRupiah($mahasiswa["price"]);?>
                </span>
                </p>
                <p class="card-footer-item">
                <span>
                    Stok = <?= $mahasiswa["stock_quantity"];?>
                </span>
                </p>
            </footer>
            <footer class="card-footer is-size-5">
                <p class="card-footer-item">
                <span>
                    <a href="../index.php">Kembali</a>
                </span>
                </p>
            </footer>
        </div>
    </div>
</body>
</html>