<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php 
    session_start();
    require 'functions.php';
    

    //Melakukan pengecekan apakah user sudah melakukan login, jika sudah akan redirect ke halaman admin.php
    if(isset($_SESSION['username'])){
        header("Location: admin.php");
        exit;
    }
    
    //Cek Cookie
    if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])){
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        //Ambil Username Berdasarkan ID
        $conn = koneksi();
        $query = "SELECT * FROM `user` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        //Cek Cookie dan Username
        if($hash === hash('sha256', $row['id'], false)){
            $_SESSION['username'] = $row['username'];
            header("Location: admin.php");
            exit;
        }
    }    

    //Login
    if(isset($_POST['login'])){
        $conn = koneksi();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `user` WHERE username = '$username'";
        $cek_user = mysqli_query($conn, $query);
        
        //Mencocokan Username dan Password
        if (mysqli_num_rows($cek_user)>0){
            $row = mysqli_fetch_assoc($cek_user);
            if (password_verify($password, $row['password'])){
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);

                //Jika Remember Me Dicentang
                if(isset($_POST['remember'])){
                    setcookie('username', $row['username'], time() + 60*60*24);
                    $hash = hash('sha256', $row['id']);
                    setcookie('hash', $hash, time() + 60*60*24);
                }
            if(hash('sha256', $row['id'] == $_SESSION['hash'])){
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
            }
        }
        $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Fullniture Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../css/tambah.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="card pb-3">
            <div class="card-content">
                <div class="content">
                    <div class="logo mt-5 mb-5">
                        <img src="../assets/img/logo.svg">
                    </div>
                    <form action="" method="post">
                    <?php if(isset($error)) : ?>
                        <p class="is-size-6 has-text-danger">Username atau Password Salah</p>
                    <?php endif;  ?>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Username" name="username">
                            <span class="icon is-small is-left">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="password" placeholder="Password" name="password">
                            <span class="icon is-small is-left">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <input type="checkbox" name="remember">
                        <label for="remember" style="color: #707070;">Remember Me</label>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button name="login" type="submit" class="button is-light is-fullwidth">Login</button>
                        </p>
                    </div>
                    </form>
                    <div class="registrasi mt-2">
                        <a class="is-size-7" href="registrasi.php">Registrasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>

</body>
</html>