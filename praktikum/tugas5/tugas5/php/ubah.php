<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    require 'functions.php';

    $id = $_GET['id'];
    $item = query("SELECT * FROM `furniture_items` WHERE id = $id;")[0];

    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo 
                "<script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'admin.php';
                </script>";

        }else{
            echo 
                "<script>
                    alert('Data Gagal Diubah!');
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
    <link rel="stylesheet" href="../css/tambah.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <h2 class="has-text-centered">Ubah Data</h2>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $item['id']; ?>">
                    <div class="field">
                        <label class="label" for="nama">Nama Barang</label>
                        <div class="control">
                            <input class="input" type="text" name="nama" id="nama" value="<?= $item['furniture_name']; ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="deskripsi">Deskripsi Barang</label>
                        <div class="control">
                            <input class="input" type="text" name="deskripsi" id="deskripsi" value="<?= $item['description']; ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="warna">Warna Dominan</label>
                        <div class="control">
                            <input class="input" type="text" name="warna" id="warna" value="<?= $item['color']; ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="harga">Harga Barang</label>
                        <div class="control">
                            <input class="input" type="number" name="harga" id="harga" value="<?= $item['price']; ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="stok">Stok</label>
                        <div class="control">
                            <input class="input" type="number" name="stok" id="stok" value="<?= $item['stock_quantity']; ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="gambar">Gambar</label>
                        <div class="control">
                            <input class="input" type="text" name="gambar" id="gambar" value="<?= $item['picture']; ?>">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-success" name="ubah">Ubah</button>
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
</body>
</html>