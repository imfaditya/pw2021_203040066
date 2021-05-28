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
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan Query tampil data
$items = query("SELECT * FROM furniture_items");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $items = query("SELECT * FROM `furniture_items` WHERE `furniture_name` LIKE '%$keyword%' OR `description` LIKE '%$keyword%' OR `color` LIKE '%$keyword%' OR price LIKE '%$keyword%'");
} else {
    $items = query("SELECT * FROM furniture_items");
}

?>
<html lang="en" class="has-navbar-fixed-top">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Fullniture Store</title>
    <link rel="icon" href="../assets/img/icon-browser.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <!-- Navbar -->
    <section id="navbar">
        <nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <img class="dark" src="../assets/img/logo.svg">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu" id="burger">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="nav-links" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="../index.php" class="navbar-item">
                            Home
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- End Navbar -->


    <!-- Table -->
    <div class="container mt-5 mb-5">
        <div class="field is-grouped is-justify-content-space-between">
            <div class="field is-grouped">
                <a href="tambah.php"><button class="button is-success mb-4 mr-2">Tambah Data</button></a>
                <a href="logout.php"><button class="button is-danger mb-4">Logout</button></a>
            </div>
            <form action="" method="GET">
                <div class="field is-grouped">
                    <div class="field mr-2">
                        <div class="control">
                            <input class="input" type="text" name="keyword" id="keyword" placeholder="Cari Data" autofocus>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-link is-light" name="cari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Warna Dominan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($items)) : ?>
                    <tr>
                        <td colspan="9">
                    <tr>
                        <h1>Data Tidak Ditemukan</h1>
                    </tr>
                    </td>
                    </tr>
                <?php endif; ?>
                <?php $no = 1; ?>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                            <div class="buttonControl">
                                <a href="ubah.php?id=<?= $item['id']; ?>"><button class="button is-info mr-1">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button></a>
                                <a href="hapus.php?id=<?= $item['id']; ?>" onclick="return confirm('Hapus Data?')"><button class="button is-danger">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button></a>
                            </div>
                        </td>
                        <td><?= $item["furniture_name"]; ?></td>
                        <td><?= $item["description"]; ?></td>
                        <td><?= $item["color"]; ?></td>
                        <td><?= ubahRupiah($item["price"]) ?></td>
                        <td><?= $item["stock_quantity"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="../assets/img/<?= $item["picture"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- End Table -->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#items').DataTable({
                "searching": false
            });
        });
    </script>
    <script>
        const burgerIcon = document.querySelector('#burger');
        const navbarMenu = document.querySelector('#nav-links');

        burgerIcon.addEventListener('click', () => {
            navbarMenu.classList.toggle('is-active');
        })
    </script>

</body>

</html>