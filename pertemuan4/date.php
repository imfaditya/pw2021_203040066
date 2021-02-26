<?php 
    // Imam Faraz Aditya
    // 203040066
    // github.com/imfaditya/pw2021_203040066
    // Pertemuan 4 (26-02-2021)
    // Pertemuan kali ini membahas beberapa function yang ada di PHP
    // Beberapa built in function
?>
<?php 
    // beberapa function php bisa dilihat di https://www.php.net/docs.php
    
    // Date
    // date merupakan built in function
    // date memerlukan parameter
    // dibawah ini merupakan beberapa contoh parameter dari date
    echo date("l"); // l -- tampilkan nama hari ini
    echo date("d"); // d -- tampilkan tanggal hari ini
    echo date("M"); // M -- menampilkan bulan dalam bentuk nama
    echo date("m"); // m -- bulan dalam bentuk angka
    // menggabungkan beberapa parameter
    echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // 1 Januari 1970 merupakan waktu yg disepakati untuk komputer
    // Function time ini tetapi menghitung detik dari per hari ini, yang sudah berlalu sejak 1 Januari 1970
    $a = 10; //Jumlah hari
    //60*60*24 -- Jumlah detik dalam 1 hari
    // Cara menghitung waktu adalah dengan menambahkan/mengurangi detik waktu yang akan datang/lampau dengan detik yang saat ini
    echo date("l", time()+60*60*24*$a); //Menampilkan nama hari, 10 hari mendatang dari sekarang


    // MKTime
    // Membuat sendiri detik sendiri dari 1 Januari 1970
    // mktime(0,0,0,0,0,0);
    // jam, menit, detik, bulan, tanggal, tahun
    // dibawah ini adalah mengetahui hari dari tanggal 22 November 2000
    echo date("l", mktime(0,0,0,11,22,2000));



    // strtotime
    // memasukan format tanggal keluar detik
    echo date("l", strtotime("22 nov 2000"));
?>