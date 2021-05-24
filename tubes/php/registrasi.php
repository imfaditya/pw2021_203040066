<?php
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<?php
require 'functions.php';
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'login.php';
                </script>";
    } else {
        echo "<script>
                    alert('Registrasi Gagal');
                    document.location.href = 'login.php';
                </script>";
    }
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
    <link rel="stylesheet" href="../css/input.css">
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
                            <p class="control">
                                <button name="register" type="submit" class="button is-light is-fullwidth">Register</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>

</body>

</html>