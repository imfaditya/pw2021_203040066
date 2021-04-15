<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    // Menhubungkan dengan file php lainnya
    require 'functions.php';

    // Melakukan Query tampil data
    $items = query("SELECT * FROM furniture_items");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Fullniture Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
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
                <?php $no = 1; ?>
                <?php foreach($items as $item) : ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                            <div class="buttonControl">
                                <a href=""><button class="button is-info mr-1"><ion-icon name="create-outline"></ion-icon></button></a>
                                <a href=""><button class="button is-danger"><ion-icon name="trash-outline"></ion-icon></button></a>
                            </div>
                        </td>
                        <td><?= $item["furniture_name"]; ?></td>
                        <td><?= $item["description"]; ?></td>
                        <td><?= $item["color"]; ?></td>
                        <td><?= ubahRupiah($item["price"]) ?></td>
                        <td><?= $item["stock_quantity"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="../assets/img/<?= $item["picture"]; ?>" alt="">
                            </figure>
                        </td>
                        <td><a href="detail.php?id=<?= $item["id"]; ?>">Pilih</td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable({
                "searching" : false
            });
        } );
    </script>
</body>
</html>