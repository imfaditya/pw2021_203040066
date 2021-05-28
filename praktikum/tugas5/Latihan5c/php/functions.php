<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
// function untuk melakukan koneksi ke database dan memilih database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20066", "#Akun#203040066#");
    mysqli_select_db($conn, "pw20066_tubes_203040066");
    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk mengubah format tampilan int harga kedalam format rupiah
function ubahRupiah($angka)
{
    return "Rp" . number_format($angka, 2, ',', '.');
}

// function untuk menambahkan data pada tambah.php kedalam database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO `furniture_items`( `furniture_name`, `description`, `color`, `price`, `stock_quantity`, `picture`) VALUES ('$nama','$deskripsi','$warna','$harga','$stok','$gambar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    $query = "DELETE FROM `furniture_items` WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>