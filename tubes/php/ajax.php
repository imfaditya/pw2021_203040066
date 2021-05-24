<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
require 'functions.php';
$items = cari($_GET['keyword']);
?>
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