<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo
        "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo
        "<script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Fullniture Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../css/input.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <h2 class="has-text-centered">Tambah Data</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="field">
                            <label class="label" for="nama">Nama Barang</label>
                            <div class="control">
                                <input class="input" type="text" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="deskripsi">Deskripsi Barang</label>
                            <div class="control">
                                <input class="input" type="text" name="deskripsi" id="deskripsi">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="warna">Warna Dominan</label>
                            <div class="control">
                                <input class="input" type="text" name="warna" id="warna">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="harga">Harga Barang</label>
                            <div class="control">
                                <input class="input" type="number" name="harga" id="harga">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="stok">Stok</label>
                            <div class="control">
                                <input class="input" type="number" name="stok" id="stok">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label" for="gambar">Gambar</label>
                            <div class="control">
                                <input class="input gambar" type="file" name="gambar" onchange="previewImage()">
                            </div>
                            <img src="../assets/img/noimage.png" width="120" style="display: block;" class="img-preview">
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-success" name="tambah">Tambah</button>
                            </div>
                            <div class="control">
                                <a href="admin.php"><button class="button is-link is-light is-danger" type="button">Kembali</button></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </form>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>