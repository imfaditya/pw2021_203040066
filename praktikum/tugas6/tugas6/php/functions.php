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

    $query = "INSERT INTO `furniture_items`( `id`, `furniture_name`, `description`, `color`, `price`, `stock_quantity`, `picture`) VALUES ('','$nama','$deskripsi','$warna','$harga','$stok','$gambar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// function untuk menghapus data sesuai dengan id yang dikirimkan dari hapus.php
function hapus($id)
{
    $conn = koneksi();

    $query = "DELETE FROM `furniture_items` WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// function untuk mengupdate data sesuai dengan data yang dikirimkan dari ubah.php
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE `furniture_items` SET `id`='$id',`furniture_name`='$nama',`description`='$deskripsi',`color`='$warna',`price`='$harga',`stock_quantity`='$stok',`picture`='$gambar' WHERE id = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//function untuk menangkap inputan dari registrasi.php dan mengirimkan datanya ke database
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $query = "SELECT `username` FROM `user` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username Sudah Digunakan');
                </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO `user` VALUES ('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}


?>