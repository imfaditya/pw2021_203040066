<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 5 (06-03-2021)
// Pertemuan kali ini membahas Array pada bahasa pemrograman PHP
?>
<?php 
// Array = Variabel yang dapat memiliki banyak nilai
// Bisa memiliki berbagai tipe data
// Pasangan key dan value --- keynya dimulai dari 0

$nama = "Imam"; //1 nilai di 1 variabel

// Membuat Array di PHP ada 2
// Cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis"); 
// Cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arr = ["Tes", 1, 2, 3, true, false, 3.5]; //Array bisa diisi oleh berbagai tipe data sekaligus

// Cara menampilkan/mencetak array
// Tiap elemen dalam array mempunyai index yang dimulai dari 0 (Sesuai urutan pada saat mengisinya)

// var_dump()
var_dump($hari); //Menampilkan dengan tipe datanya

echo "<br>";

// print_r()
print_r($bulan); //Tanpa tipe data

echo "<br>";

// Menampilkan 1 elemen pada 
echo $arr[0]; // Index ke 0
echo "<br>";
echo $bulan[1]; // Index ke 1

echo "<br>";

// Menambahkan elemen baru pada array
//Tambah $bulan dengan isi "April"
var_dump($bulan);
$bulan[] = "April";
echo "<br>";
var_dump($bulan);

?>