<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
require 'functions.php';
$items = cari($_GET['keyword']);
?>
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