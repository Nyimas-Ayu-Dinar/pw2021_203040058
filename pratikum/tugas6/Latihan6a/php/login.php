<?php
session_start();
require 'function.php';
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <title>203040058</title>
</head>

<body>
    <br><br>
    <div class="container">
        <div class="grid">
            <form action="" method="post">
                <?php if (isset($error)): ?>
                <p style="color: red; font-style:italic;">Username atau Password salah</p>
                <?php endif;?>
                <label for="username">Username</label><br>
                <input type="text" name="username"><br>

                <label for="password">Password</label>
                <input type="password" name="password"><br>

                <div class="remember">
                    <input type="checkbox" name="remember">
                    <label for="remember">Ingat saya</label>
                </div><br>

                <button type="submit" name="submit" class="button primary outline">Masuk kuy</button>
            </form><br>
            <div class="registrasi">
                <p>Belum punya akun ? daftar yu sini <a href="registrasi.php">Disini</a></p>
            </div>
        </div>
    </div>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>