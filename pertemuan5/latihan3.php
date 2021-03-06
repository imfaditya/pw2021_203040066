<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 5 (06-03-2021)
// Pertemuan kali ini membahas Array pada bahasa pemrograman PHP
// Membuat data pada mahasiswa menggunakan array -- Mencoba array multi dimensi
?>
<?php 
// Array numerik -- menggunakan index angka
// Array asosiatif -- indexnya string


// Array biasa / 1 dimensi
$mahasiswaB = ["Imam Faraz Aditya", "203040066", "Teknik Informatika", "Email : imam@abc.co.id"]; 

//Array multi dimensi / array didalam array
$mahasiswa = [
    ["Imam", "203040066", "Teknik Informatika", "Email : imam@abc.co.id"],
    ["Faraz", "203040066", "Teknik Informatika", "Email : imam@abc.co.id"],
    ["Aditya", "203040066", "Teknik Informatika", "Email : imam@abc.co.id"],
    ["Imam Faraz Aditya", "203040066", "Teknik Informatika", "Email : imam@abc.co.id"],
];

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
<!-- Menggunakan looping -->
    <?php foreach ($mahasiswaB as $mhs) : ?>
        <li><?= $mhs ?></li>
    <?php endforeach; ?>
    
    <br>

<!-- Manual -->
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NRP :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>E-Mail :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>

