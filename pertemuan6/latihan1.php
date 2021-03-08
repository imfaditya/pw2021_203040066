<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 6 (08-03-2021)
// Materi hari ini adalah associative array di PHP
// Review array dan array multi dimensi
?>
<?php 
// Review Array
// Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "Teks", true];

// Menampilkan array
// Versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array
echo $arr[0];
echo "<br>";

// Menampilkan array bisa menggunakan for / foreach (lebih mudah)
foreach ($bulan as $b){
    echo "$b <br>";
}

// Array Multi Dimensi / Array didalam array
$angka = [[1,2,3],[4,5,6],[7,8,9]];
// Cara memanggil array multi dimensi
echo $angka[1][1] . "<br>";
// Index yang pertama untuk array terluar, index kedua untuk memilih isi dari array yg telah dipilih
// Menggunakan 2 foreach
foreach ($angka as $a){
    foreach ($a as $b){
        echo $b;
    }
    echo "<br>";
}
?>