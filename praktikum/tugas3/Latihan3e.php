<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
$items = [
    [
        "nama"=>"INGMARSÖ",
        "deskripsi"=>"Sofa 2 dudukan, dalam/luar ruang",
        "warnaDominan"=>"Putih",
        "harga"=>1499000,
        "jumlahStok"=>10,
        "foto"=>"1.jpg"
    ],
    [
        "nama"=>"BRUSEN",
        "deskripsi"=>"Sofa 3 dudukan, luar ruang",
        "warnaDominan"=>"Merah",
        "harga"=>499999,
        "jumlahStok"=>15,
        "foto"=>"2.jpg"
    ],
    [
        "nama"=>"NYHAMN",
        "deskripsi"=>"Sofa tempat tidur dengan tiga bantal kursi, dengan kasur kantong pegas",
        "warnaDominan"=>"Abu-Abu",
        "harga"=>5795000,
        "jumlahStok"=>52,
        "foto"=>"3.jpg"
    ],
    [
        "nama"=>"FRIHETEN",
        "deskripsi"=>"Sofa tempat tidur 3 dudukan",
        "warnaDominan"=>"Abu-Abu",
        "harga"=>8495000,
        "jumlahStok"=>24,
        "foto"=>"4.jpg"
    ],
    [
        "nama"=>"LENNART",
        "deskripsi"=>"Unit laci",
        "warnaDominan"=>"Putih",
        "harga"=>249000,
        "jumlahStok"=>250,
        "foto"=>"5.jpg"
    ],
    [
        "nama"=>"BRUSALI",
        "deskripsi"=>"Meja",
        "warnaDominan"=>"Putih",
        "harga"=>999000,
        "jumlahStok"=>351,
        "foto"=>"6.jpg"
    ],
    [
        "nama"=>"ALEX",
        "deskripsi"=>"Unit laci beroda",
        "warnaDominan"=>"Biru",
        "harga"=>1999000,
        "jumlahStok"=>161,
        "foto"=>"7.jpg"
    ],
    [
        "nama"=>"ÖRFJÄLL",
        "deskripsi"=>"Kursi untuk meja anak",
        "warnaDominan"=>"Biru",
        "harga"=>799000,
        "jumlahStok"=>58,
        "foto"=>"8.jpg"
    ],
    [
        "nama"=>"HEMNES",
        "deskripsi"=>"Kabinet cermin 2 pintu",
        "warnaDominan"=>"Hitam",
        "harga"=>1995000,
        "jumlahStok"=>6,
        "foto"=>"9.jpg"
    ],
    [
        "nama"=>"FINTORP",
        "deskripsi"=>"Tempat pisau bermagnet",
        "warnaDominan"=>"Hitam",
        "harga"=>149000,
        "jumlahStok"=>189,
        "foto"=>"10.jpg"
    ],
    [
        "nama"=>"VARIERA",
        "deskripsi"=>"Baki perkakas dapur, bambu",
        "warnaDominan"=>"Coklat",
        "harga"=>199000,
        "jumlahStok"=>584,
        "foto"=>"11.jpg"
    ]
]
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
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
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $number => $item) : ?>
                    <tr>
                        <td><?= $number+1; ?></td>
                        <td><?= $item["nama"]; ?></td>
                        <td><?= $item["deskripsi"]; ?></td>
                        <td><?= $item["warnaDominan"]; ?></td>
                        <td>Rp<?= number_format($item["harga"],2,',','.'); ?></td>
                        <td><?= $item["jumlahStok"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="img/<?= $item["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable();
        } );
    </script>
</body>
</html>