<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
require 'functions.php';

if (!isset($_GET['search'])) {
  $text = "Beragam produk terbaik ada di sini";
  $items = query("SELECT * FROM furniture_items");
} else if (isset($_GET['search'])) {
  $items = cari($_GET['keyword']);
  $text = "Beragam produk " . $_GET['keyword'] . " terbaik ada di sini";
  if (empty($items)) {
    $text = "Produk " . $_GET['keyword'] . " tidak dapat ditemukan disini.";
    $items = query("SELECT * FROM furniture_items");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="icon" href="assets/img/icon-browser.png">
  <!-- Bulma CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/detail.css">
  <link rel="stylesheet" href="../css/product.css">
</head>

<body>
  <!-- Navbar -->
  <section id="navbar">
    <nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="../assets/img/logo.svg">
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

            <a href="product.php" class="navbar-item">
              Product
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>

              <div class="navbar-dropdown">
                <a href="admin.php" class="navbar-item">
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

  <!-- Searchbar -->
  <section class="search-bar">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column">
          <h1 class="title is-size-4"><?= $text; ?></h1>
        </div>
        <div class="column">
          <form action="" method="POST">
            <div class="control has-icons-left">
              <input class="input keyword" type="text" name="keyword" autocomplete="off" placeholder="Search...">
              <div class="icon is-left">
                <ion-icon name="search-outline"></ion-icon>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Searchbar -->

  <!-- Product -->
  <section class="product">
    <div class="container">
      <div class="data">
        <div class="columns is-multiline">
          <?php foreach ($items as $item) : ?>
            <div class="column is-3">
              <a href="detail.php?id=<?= $item['id']; ?>">
                <div class="card" style="border-radius: 5px;">
                  <div class="card-image">
                    <figure class="image">
                      <img style="padding: 10px;" src="../assets/img/<?= $item['picture']; ?>" alt="">
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
    </div>
  </section>
  <!-- End Product -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="content">
        <div class="columns is-multiline">
          <div class="column">
            <img src="../assets/img/logo.svg" alt="" style="width: 150px;">
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


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
  <script src="../js/index.js"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>