<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 6 (08-03-2021)
// Materi hari ini adalah associative array di PHP
?>
<?php 
// Contoh array numerik -- key nya adalah index (angka yang dimulai dari 0)
$mahasiswa = ["Imam Faraz Aditya", "203040066", "imam@gmail.com", "Teknik Informatika"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li><?php echo $mahasiswa[0]; ?></li>
        <li><?php echo $mahasiswa[1]; ?></li>
        <li><?php echo $mahasiswa[2]; ?></li>
        <li><?php echo $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>

<?php
// Array Associative
// sama dengan array numerik, tetapi key nya bukan index tetapi string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Imam Faraz Aditya",
        "nrp" => "203040066",
        "email" => "imam@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "mhs1.png"
    ],
    [
        "nama" => "Aditya",
        "nrp" => "2030400XX",
        "email" => "aditya@gmail.com",
        "jurusan" => "Teknik Mesin",
        "nilai" => [70,80,90],
        "gambar" => "mhs2.png"
    ]
];
// string diatas "nama" merupakan key pada array tersebut

// Cara mencetaknya -- Sesuai urutan keynya dari yang terluar
echo $mahasiswa[1]["nilai"][1];

// Menampilkan array associative di html yang didalamnya terdapat gambar 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];  ?>" alt="">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["nrp"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>