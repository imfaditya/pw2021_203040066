<?php 
// Imam Faraz Aditya
// 203040066
// github.com/imfaditya/pw2021_203040066
// Pertemuan 6 (08-03-2021)
// Materi hari ini adalah GET&POST
?>
<?php 
// Cek apakah submit ditekan / belum
if(isset($_POST["submit"])) {
// Cek username dan password
    if($_POST["username"] == "admin" && $_POST["password"] == "rahasia"){
// Jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }
// jika salah, tampilkan pesan kesalahan
    else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="login.php" method="POST">
            <li>    
                <label for="username">Masukkan Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Masukkan Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </form>
    </ul>
</body>
</html>