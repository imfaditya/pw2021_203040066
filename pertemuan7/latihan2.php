<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 6 (08-03-2021)
// Materi hari ini adalah GET&POST
?>
<?php 
// cek apakah tidak ada data di $_GET
// untuk mencegah yang masuk ke latihan2.php tanpa ke latihan1.php untuk memilih mobil terlebih dahulu
if( !isset($_GET["jenis"])){
    //redirect -- mengirim user ke halaman tertentu
    header("Location: latihan1.php");
    exit;
}

$mobil = [
    "avanza"=>
    [
        "merk" => "Toyota",
        "jenis" => "Avanza",
        "transmisi" => "Manual",
        "tahun" => "2020",
        "foto" => "avanza.jpg"
    ],
    "yaris"=>
    [
        "merk" => "Toyota",
        "jenis" => "Yaris",
        "transmisi" => "Matic",
        "tahun" => "2018",
        "foto" => "yaris.jpeg"
    ],
    "sirion"=>
    [
        "merk" => "Daihatsu",
        "jenis" => "Sirion",
        "transmisi" => "Matic",
        "tahun" => "2019",
        "foto" => "sirion.jpg"
    ]
];

$getData = strtolower($_GET["jenis"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <ul>
        <li><img src="../pertemuan6/img/<?= $mobil["$getData"]["foto"] ?>" alt=""></li>
        <li>Merk :<?= $mobil["$getData"]["merk"];  ?></li>
        <li>Jenis :<?= $mobil["$getData"]["jenis"];  ?></li>
        <li>Transmisi :<?= $mobil["$getData"]["transmisi"];  ?></li>
        <li>Tahun :<?= $mobil["$getData"]["tahun"];  ?></li>
    </ul>
    <a href="latihan1.php">Kembali</a>
</body>
</html>