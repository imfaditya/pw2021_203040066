<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 11 (30-04-2021)
// Materi hari ini adalah Delete & Update Data
?>
<?php
require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

//Mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href ='index.php';
          </script>";
} else {
  echo "Data Gagal Dihapus";
}
?>