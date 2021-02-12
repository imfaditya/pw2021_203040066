<?php 
    // Imam Faraz Aditya
    // 203040066
    // github.com/imfaditya/pw2021_203040066
    // Pertemuan 2 (11 Februari 2021)
    // Materi minggu ini mempelajari mengenai sintaks dasar PHP
?>
<?php
    // ; titik koma diperlukan
    // Komentar 1 line
    /* Ini komentar lebih dari 1 line */


    // Standar Output
    // echo
    // print
    // print_r -- biasa digunakan untuk debugging -- menampilkan array -- bisa juga menampilkan string
    // var_dump -- biasa digunakan untuk debugging -- menampilkan variabel


    echo "Cetak tulisan menggunakan echo";
    print "Cetak tulisan menggunakan print";
    print_r ("Cetak tulisan menggunakan print_r");
    var_dump ("Cetak tulisan menggunakan var_dump");


    // Angka tidak usah pake kutip
    // Kutip 1 atau kutip 2 sama aja
    echo 123; 


    // Bisa juga print boolean
    echo true;
    echo false;


    // Variabel dan Tipe Data
    // Cukup Pakai Dollar $
    // Tidak perlu didefinisikan tipe datanya
    // Tidak boleh didahului angka nama variabelnya
    $string = "Imam didalam variabel";
    $int = 21;
    $float = 0.5;
    echo "$string + $int + $float";


    // Interpolasi 
    // Didalam PHP lebih 'sakti' jika kita menggunakan kutip 2 dibandingkan dengan kutip 1
    // Nilai variabelnya muncul :
    echo "Sepuluh ditambah dengan sebelas adalah $int";
    // Nilai variabelnya tidak muncul, yang muncul adalah nama variabelnya :
    echo 'Sepuluh ditambah dengan sebelas adalah $int';


    // Operasi Aritmatika
    // + - * / %
    echo 10/2;
    $pembagian = 10/2;
    echo $pembagian;


    // Penggabung String -- Concatenation -- Concat
    // Ditandai dengan . (titik)
    $nama_depan = "Imam";
    $nama_akhir = "Aditya";
    echo $nama_depan . " " . $nama_akhir;


    // Operator Assignment
    // = , += , -= , *=, /= , %= , .=
    $a = 1;
    $a += 2;
    echo $a;


    // Operator Perbandingan
    // Hanya mengecek nilainya saja, tidak dengan tipe datanya
    // > , < , <= , >= , == , !=


    // Operator Identitas
    // Mengecek nilai dengan tipe datanya
    // === , !==


    // Operator Logika
    // && , || , !

?>


    <!-- Penulisan Sintaks PHP
    1. PHP didalam HTML -- lebih baik
    2. HTML didalm PHP -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- PHP didalam HTML -->
        <h1>Selamat datang <?php echo "Mame"; ?> </h1>
        <!-- HTML didalam PHP -->
        <?php 
            echo "<h1>Selamat datang Imam Faraz Aditya</h1>"
        ?>
    </body>
    </html>

