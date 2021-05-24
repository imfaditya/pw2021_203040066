<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
// Mengecek apakah ada id yang dikirimkan dari index.php
// Jika tidak ada makan akan di redirect ke halaman index.php
if (!isset($_GET["id"])) {
    header("Location : ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET["id"];

// Melakukan query dengan parameter id yang diambil dari url
$item = query("SELECT * FROM furniture_items WHERE id = $id")[0];
$items = query("SELECT * FROM furniture_items WHERE id != $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $item["furniture_name"];  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/detail.css">
</head>

<body>

    <!-- Navbar -->
    <div class="container">
        <nav class="navbar is-white" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <div class="navbar-item">
                    <img src="../assets/img/logo.svg">
                </div>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a href="../index.php" class="navbar-item">
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

    <!-- Product Detail -->
    <div class="container">
        <div class="container is-fluid">
            <div class="columns product-name">
                <div class="column">
                    <a href="../index.php">
                        <ion-icon style="font-size: 30px; color: black;" name="arrow-back-circle-outline"></ion-icon>
                    </a>
                    <h2 class="title mt-5"><?= $item['furniture_name']; ?></h2>
                    <h2 class="subtitle mt-3"><?= $item['description']; ?></h2>
                    <h2 class="subtitle mt-3"><?= ubahRupiah($item['price']); ?></h2>
                    <ion-icon style="font-size: 1.5em;" name="pricetag-outline"></ion-icon>
                    <h3 class="subtitle is-6 ms-4" style="display: inline;">
                        Terjual sebanyak <?= (rand(10, 900)); ?>
                    </h3>
                    <a class="mt-5" href="" style="display: block;">
                        <button class="button button-cart">
                            <ion-icon name="cart-outline"></ion-icon>Add to Cart
                        </button>
                    </a>
                    <a class="mt-2" href="" style="display: block;">
                        <button class="button button-cart">
                            <ion-icon name="heart-outline"></ion-icon>Add to Wishlist
                        </button>
                    </a>
                </div>
                <div class="column">
                    <img src="../assets/img/<?= $item['picture']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Slider Product -->
    <div class="container">
        <div class="container is-fluid">
            <div class="splide" id="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($items as $item) : ?>
                            <li class="splide__slide">
                                <a href="detail.php?id=<?= $item['id']; ?>">
                                    <div class="splide__slide__container is-flex is-flex-direction-column is-align-items-center">
                                        <img src="../assets/img/<?= $item['picture']; ?>" alt="" width="200px">
                                        <h4 class="title is-6"><?= $item['furniture_name']; ?></h4>
                                        <div class="subtitle is-6">
                                            <?= ubahRupiah($item['price']); ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        new Splide('#splide', {
            perPage: 4,
            rewind: true,
            height: '18rem',
            padding: {
                left: 10,
                right: 10,
            },
            breakpoints: {
                960: {
                    perPage: 2,
                },
                700: {
                    perPage: 1,
                },
            },
            autoplay: true,
        }).mount();
    </script>
</body>

</html>