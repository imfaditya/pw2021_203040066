<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    session_start();
    session_destroy();
    header("Location: ../index.php");
    die;
?>