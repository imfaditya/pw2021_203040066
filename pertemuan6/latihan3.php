<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 6 (08-03-2021)
// Materi hari ini adalah associative array di PHP
// Tugas Pertemuan 6 -- Membuat data menggunakan array associative
?>
<?php 
$mobil = [
    [
        "merk" => "Toyota",
        "jenis" => "Avanza",
        "transmisi" => "Manual",
        "tahun" => "2020",
        "foto" => "avanza.jpg"
    ],
    [
        "merk" => "Toyota",
        "jenis" => "Yaris",
        "transmisi" => "Matic",
        "tahun" => "2018",
        "foto" => "yaris.jpeg"
    ],
    [
        "merk" => "Daihatsu",
        "jenis" => "Sirion",
        "transmisi" => "Matic",
        "tahun" => "2019",
        "foto" => "sirion.jpg"
    ],
    [
        "merk" => "Suzuki",
        "jenis" => "Baleno",
        "transmisi" => "Manual",
        "tahun" => "2019",
        "foto" => "baleno.jpg"
    ],
    [
        "merk" => "Suzuki",
        "jenis" => "Ertiga",
        "transmisi" => "Manual",
        "tahun" => "2017",
        "foto" => "ertiga.jpg"
    ],
    [
        "merk" => "Toyota",
        "jenis" => "Fortuner",
        "transmisi" => "Matic",
        "tahun" => "2021",
        "foto" => "fortuner.jpg"
    ],
    [
        "merk" => "Mitsubishi",
        "jenis" => "Outlander Sport",
        "transmisi" => "Manual",
        "tahun" => "2020",
        "foto" => "outlander.jpg"
    ],
    [
        "merk" => "Mitsubishi",
        "jenis" => "Xpander",
        "transmisi" => "Matic",
        "tahun" => "2019",
        "foto" => "xpander.jpg"
    ],
    [
        "merk" => "Wuling",
        "jenis" => "Cortez",
        "transmisi" => "Manual",
        "tahun" => "2019",
        "foto" => "cortez.jpg"
    ],
    [
        "merk" => "Nissan",
        "jenis" => "Juke",
        "transmisi" => "Manual",
        "tahun" => "2015",
        "foto" => "juke.jpg"
    ],
]
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
    <h1>Daftar Mobil</h1>

    <?php foreach ($mobil as $mbl) : ?>
        <ul>
            <li><img src="img/<?= $mbl["foto"] ?>" alt=""></li>
            <li>Merk :<?= $mbl["merk"];  ?></li>
            <li>Jenis :<?= $mbl["jenis"];  ?></li>
            <li>Transmisi :<?= $mbl["transmisi"];  ?></li>
            <li>Tahun :<?= $mbl["tahun"];  ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>