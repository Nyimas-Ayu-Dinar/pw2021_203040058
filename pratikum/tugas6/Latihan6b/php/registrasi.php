<?php
require 'function.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Registrasi Berhasil');
        document.location.href='login.php';
        </script>";
    } else {
        echo "<script>
        alert('Registrasi Gagal :(');
        </script>";
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
                <label for="username">Username</label>
                <input type="text" name="username"><br>
                <label for="password">Password</label>
                <input type="password" name="password"><br>
                <button type="submit" name="register" class="button primary outline">Skuyy daftar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>