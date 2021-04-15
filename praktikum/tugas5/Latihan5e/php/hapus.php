<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    require 'functions.php';

    $id = $_GET['id'];

    if(hapus($id) > 0){
        echo 
            "<script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'admin.php';
            </script>";
    }else{
        "<script>
            alert('Data Gagal Dihapus!');
            document.location.href = 'admin.php';
        </script>";
    }
?>