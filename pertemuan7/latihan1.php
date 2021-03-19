<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 6 (08-03-2021)
// Materi hari ini adalah GET&POST
?>
<?php 
// Variable Scope / lingkup variabel
$x = 10; // variabel hanya bisa diakses didalam file latihan1.php
echo $x;
echo "<br>";

function tampilX() {
    // variabel $x = 10; tidak bisa dipanggil didalam function ini secara langsung
    $y = 20; // variabel local hanya bisa diakses didalam function tampilX();

    // cara mengambil variabel $x = 10; yang berada diluar function ini
    global $x; // memanggil variabel $x yang ada diluar function
}

tampilX();


// Variabel superglobals yang sudah dimiliki oleh PHP
// 1. $_GET
// 2. $_POST
// 3. $_REQUEST
// 4. $_SESSION
// 5. $_COOKIE
// 6. $_SERVER --> menyimpan informasi server kita
// 7. $_ENV
// Semua variabel superglobals adalah array associative

// GET
// Cara memasukan data kedalam variabel get seperti array associative
$_GET["nama"] = "Imam Faraz Aditya";
var_dump($_GET);

// cara memasukan data kedalam variabel get cara lain -- didalam url -- ditangkap oleh variabel get
// http://localhost/pw2021_203040066/pertemuan7/latihan1.php 
// http://localhost/pw2021_203040066/pertemuan7/latihan1.php?nrp=203040066
// ?nrp=203040066 adalah key dan value yang akana dimasukkan kedalam variabel get
// nrp adalah key, dan 203040066 adalah value


// memasukkan 2 data sekaligus kedalam variabel get didalam url
// tambahkan & diujung value terakhir, dan isi seperti sebelumnya
// http://localhost/pw2021_203040066/pertemuan7/latihan1.php?nrp=203040066&email=imamaditya2211@gmail.com


?>

<?php 
// Coba get
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
            <li>
                <a href="latihan2.php?jenis=<?= $mbl["jenis"]; ?>"><?= $mbl["jenis"];  ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>