<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query dengan memanggil function
$items = query("SELECT * FROM furniture_items");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullniture</title>
    <link rel="icon" href="assets/img/logo@2x.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar is-white" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <div class="navbar-item">
                    <img src="assets/img/logo.svg">
                </div>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item">
                        Home
                    </a>
                    <a class="navbar-item">
                        Product
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            More
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a href="php/login.php" class="navbar-item">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End -->

    <!-- Header Text -->
    <div class="container mt-5">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-5 headingText">
                    <h1>Full Of Love<br>At Home<br>With Fullniture</h1>
                </div>
                <div class="column is-7 is-flex is-align-items-center">
                    <span class="line"></span>
                    <p>
                        "Bangun suasana rumah yang ramah dan penuh cinta dengan barang-barang berkualitas yang bias kalian dapatkan di Fullniture dengan harga terbaik di kelasnya"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Header Photo -->
    <div class="container mt-5">
        <div class="container is-fluid">
            <div class="headerPhoto">
                <img src="assets/img/header2.jpg">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Product -->
    <div class="container mt-5">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column">
                    <h3>Our Product</h3>
                </div>
                <div class="column">
                    <form action="" method="POST">
                        <div class="control has-icons-left">
                            <input class="input keyword" type="text" name="keyword" autocomplete="off" placeholder="Search...">
                            <span class="icon is-left">
                                <ion-icon name="search-outline"></ion-icon>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="data">
                <div class="columns is-multiline is-variable is-8">
                    <?php foreach ($items as $item) : ?>
                        <div class="column is-3 imageProduct mb-5 mt-5">
                            <a href="php/detail.php?id=<?= $item['id']; ?>">
                                <img src="assets/img/<?= $item['picture']; ?>">
                                <h4><?= $item['furniture_name']; ?></h4>
                                <h5><?= ubahRupiah($item['price']); ?></h5>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/script.js"></script>
</body>

</html>