<?php
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 13 (04-04-2021)
// Materi pertemuan 13 adalah ajax live search dan upload gambar
?>
<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('User baru berhasil ditambahkan, silahkan login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "user gagal ditambahkan! ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Form Registrasi</h3>

  <form action="" method="post">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password1" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <li>
        <button type="submit" name="registrasi">Registrasi</button>
      </li>
    </ul>
  </form>
</body>

</html>