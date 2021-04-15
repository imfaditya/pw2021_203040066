<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query dengan memanggil function
$items = query("SELECT * FROM furniture_items");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Furniture Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">    
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Warna Dominan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Lihat Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $item) : ?>  
                        <tr>
                            <td><?= $item["id"]; ?></td>
                            <td><?= $item["furniture_name"]; ?></td>
                            <td><?= $item["description"]; ?></td>
                            <td><?= $item["color"]; ?></td>
                            <td><?= ubahRupiah($item["price"]) ?></td>
                            <td><?= $item["stock_quantity"]; ?></td>
                            <td>
                                <figure class="image is-128x128">
                                    <img src="assets/img/<?= $item["picture"]; ?>" alt="">
                                </figure>
                            </td>
                            <td><a href="php/detail.php?id=<?= $item["id"]; ?>">Pilih</td>
                        </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable({
                "searching" : false
            });
        } );
    </script>
</body>
</html>