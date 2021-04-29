<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 10 (29-04-2021)
// Materi hari ini adalah Koneksi Database
?>
<?php
require 'functions.php';
$mobil = query("SELECT * FROM mobil");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mobil</title>
</head>

<body>
  <h3>Daftar Mobil</h3>
  <a href="tambah.php">Tambah Data Mobil</a>
  <br><br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Nama Jenis</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mobil as $mbl) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mbl["nama_jenis"]; ?></td>
        <td><img src="img/<?= $mbl["gambar"]; ?>" width="60"></td>
        <td>
          <a href="detail.php?id=<?= $mbl["id"]; ?>">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>