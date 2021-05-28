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

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO `furniture_items`( `id`, `furniture_name`, `description`, `color`, `price`, `stock_quantity`, `picture`) VALUES (NULL,'$nama','$deskripsi','$warna','$harga','$stok','$gambar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// function untuk menghapus data sesuai dengan id yang dikirimkan dari hapus.php
function hapus($id)
{
    $conn = koneksi();

    $item = query("SELECT * FROM `furniture_items` WHERE id = $id")[0];
    if ($item['picture'] != 'noimage.png') {
        unlink('../assets/img/' . $item['picture']);
    }

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
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'noimage.png') {
        $gambar = $gambar_lama;
    }

    if ($gambar != 'noimage.png' && $gambar != $gambar_lama) {
        unlink('../assets/img/' . $gambar_lama);
    }

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

//function cari
function cari($keyword)
{
    $conn = koneksi();
    $query = "SELECT * FROM furniture_items WHERE `furniture_name` LIKE '%$keyword%' OR `description` LIKE '%$keyword%' OR `color` LIKE '%$keyword%' OR price LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//function upload gambar
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // Ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        return 'noimage.png';
    }

    // cek extensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('Yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    //cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/jpg' && $tipe_file != 'image/png') {
        echo "<script>
            alert('Yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
            alert('Ukuran terlalu besar! Maksimal 5Mbyte');
          </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

function pickRandom($keyword)
{
    $keyword = query("SELECT * FROM furniture_items WHERE `description` LIKE '%$keyword%'");
    $random_pick = (rand(0, ((count($keyword)) - 1)));
    $keyword = $keyword[$random_pick];

    return $keyword;
}

?>