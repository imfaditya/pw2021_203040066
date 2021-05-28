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

$kursi = pickRandom("sofa");
$laci = pickRandom("laci");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullniture</title>
    <link rel="icon" href="assets/img/icon-browser.png">
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/index.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
</head>

<body>
    <!-- Navbar -->
    <section id="navbar">
        <nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <img class="light" src="assets/img/logo-putih.svg">
                        <img class="dark" style="display: none;" src="assets/img/logo.svg">
                    </a>

                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu" id="burger">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="nav-links" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="index.php" class="navbar-item">
                            Home
                        </a>

                        <a href="php/product.php" class="navbar-item">
                            Product
                        </a>

                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                More
                            </a>

                            <div class="navbar-dropdown">
                                <a href="php/admin.php" class="navbar-item">
                                    Admin Page
                                </a>
                            </div>
                        </div>

                        <a class="navbar-item">
                            <ion-icon name="heart-outline"></ion-icon>
                        </a>

                        <a class="navbar-item">
                            <ion-icon name="cart-outline"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- End Navbar -->

    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="wrapper-center">
                <h1 class="title">Selamat datang di Fullniture, dimana kamu bisa menemukan barang impian untuk mengisi rumahmu.</h1>
                <div class="wrapper-search-bar">
                    <form action="php/product.php" method="get">
                        <div class="field has-addons">
                            <div class="control">
                                <input class="input" name="keyword" type="text" placeholder="Search Your Dream">
                            </div>
                            <div class="control">
                                <button name="search" class="button" type="submit">
                                    <ion-icon name="search"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Category -->
    <section class="top-category">
        <div class="container">
            <h2 class="title is-size-4 pb-3">Top Category Of The Month</h2>
            <div class="columns">
                <div class="column">
                    <img src="assets/img/category-lemari.png" alt="">
                    <span class="circle"></span>
                </div>
                <div class="column">
                    <img src="assets/img/category-meja.png" alt="">
                    <span class="circle"></span>
                </div>
                <div class="column">
                    <img src="assets/img/category-sofa.png" alt="">
                    <span class="circle"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Category -->

    <!-- Best Choice -->
    <section class="best-choice">
        <span></span>
        <div class="container">
            <h2 class="title is-size-4 pb-3 has-text-centered mt-5">Best Choice</h2>
            <div class="slider-best-choice">
                <?php foreach ($items as $item) : ?>
                    <div class="wrapper">
                        <a href="php/detail.php?id=<?= $item['id']; ?>">
                            <div class="card" style="border-radius: 5px;">
                                <div class="card-image">
                                    <figure class="image">
                                        <img style="padding: 10px;" src="assets/img/<?= $item['picture']; ?>" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-size-6"><?= $item['furniture_name']; ?></p>
                                            <p class="subtitle is-size-6"><?= ubahRupiah($item['price']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Best Choice -->

    <!-- Highlight Kursi -->
    <section class="highlight-kursi">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <img src="assets/img/<?= $kursi['picture']; ?>" alt="">
                </div>
                <div class="column is-flex is-justify-content-center is-flex-direction-column">
                    <h2 class="title is-size-4 pb-3"><?= $kursi['furniture_name']; ?></h2>
                    <p class="subtitle is-size-6">Merupakan kursi yang menawarkan desain artistic yang linier dengan kenyamanan saat anda menggunakannya.<br><br> Didesain khusus oleh <strong>Isaac Newton</strong> dengan rumus gravitasi sehingga kursi ini sangatlah kokoh dan nyaman cocok dengan postur badan orang Indonesia. <br> Rumus yang digunakan untuk mendesain kursi ini adalah <strong>F = G x (m1.m2/r kuadrat)</strong> yang sangat populer dan berguna di dunia.</p>
                    <a class="button" href="php/detail.php?id=<?= $kursi['id']; ?>">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Highlight Kursi -->

    <!-- Highlight Laci -->
    <section class="highlight-laci">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <img src="assets/img/<?= $laci['picture']; ?>" alt="">
                </div>
                <div class="column is-flex is-justify-content-center is-flex-direction-column">
                    <h2 class="title is-size-4 pb-3"><?= $laci['furniture_name']; ?></h2>
                    <p class="subtitle is-size-6">Laci ini dibuat menggunakan emas yang dicuri oleh kelompok bernama money heist pada tahun 2020. Hal ini membuat laci ini sangatlah mewah dan kokoh untuk pemakaian jangka panjang. Meskipun begitu, harga dari laci ini masih cukup reasonable, dan sangatlah limited edition.</p>
                    <a class="button" href="php/detail.php?id=<?= $laci['id']; ?>">Lihat Detail</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Highlight Laci -->

    <!-- Room Inspiration -->
    <section class="room-inspiration">
        <div class="container">
            <div class="columns">
                <div class="column" style="position: relative;">
                    <h2 class="title is-size-4">Your Inspiration ~ Vol. 21</h2>
                    <img src="assets/img/header.jpg">
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <img src="assets/img/header2.jpg">
                </div>
                <div class="column">
                    <img src="assets/img/header3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Room Inspiration -->

    <!-- Location -->
    <section class="location">
        <div class="container">
            <h2 class="title is-size-4 has-text-centered">Our Store</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15846.271189800496!2d107.12893068544764!3d-6.822301465286727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852f4f71b004b%3A0x401e8f1fc28dad0!2sCianjur%2C%20Kec.%20Cianjur%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1622129426289!5m2!1sid!2sid" width="100%" height="400" style="border-radius: 10px" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <!-- End Location -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="content">
                <div class="columns is-multiline">
                    <div class="column">
                        <img src="assets/img/logo.svg" alt="" style="width: 150px;">
                        <p>Full Of Love With Fullniture
                        </p>
                        <p style="margin-bottom: 3px;">
                            <ion-icon name="map-outline"></ion-icon>
                            Cianjur, Jawa Barat Indonesia.</Cianjur,>
                        <p style="margin-bottom: 3px;">
                            <ion-icon name="call-outline"></ion-icon>
                            0263 - 123321
                        </p>
                        <p>
                            <ion-icon name="mail-open-outline"></ion-icon>
                            fullniture@imfaditya.com
                        </p>
                    </div>
                    <div class="column">
                        <p style="margin-bottom: 3px;"><strong>Sitemap</strong></p>
                        <a href="">Home</a>
                        <a href="">Product</a>
                        <a href="">Admin Page</a>
                        <a href="">Cart</a>
                        <a href="">Wishlist</a>
                    </div>
                    <div class="column">
                        <p style="margin-bottom: 3px;"><strong>Information</strong></p>
                        <a href="">FAQ</a>
                        <a href="">Return Policy</a>
                        <a href="">Delivery</a>
                        <a href="">Tax</a>
                        <a href="">Export</a>
                    </div>
                    <div class="column">
                        <p style="margin-bottom: 3px;"><strong>Social Media</strong></p>
                        <a>
                            <ion-icon name="logo-facebook"></ion-icon>
                            Fullniture Indonesia
                        </a>
                        <a>
                            <ion-icon name="logo-twitter"></ion-icon>
                            @fullniture.id
                        </a>
                        <a>
                            <ion-icon name="logo-instagram"></ion-icon>
                            @fullnitureindonesia
                        </a>
                    </div>
                    <div class="column">
                        <p style="margin-bottom: 3px;"><strong>Help</strong></p>
                        <a href="">Privacy Policy</a>
                        <a href="">Terms and Condition</a>
                    </div>
                </div>
                <div class="columns mt-3">
                    <div class="column">
                        <p>
                            <strong>Fullniture</strong> by <a style="display: inline;" href="https://instagram.com/imfaditya">Imam Faraz Aditya</a>. All The Product Picture Belongs To
                            <a style="display: inline;" href="http://ikea.co.id">IKEA</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>