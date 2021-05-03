<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 12 (03-04-2021)
// Materi pertemuan 12 adalah login dan registrasi
?>
<?php
session_start();
session_destroy();
header("Location:login.php");
exit;
?>