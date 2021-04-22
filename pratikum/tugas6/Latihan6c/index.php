<?php
require 'php/function.php';
$Hijab = query("SELECT * FROM hijab");
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
        <a href="php/login.php">
            <button class="button">Masuk ke halaman admin</button>
        </a>
        <div class="grid">
            <div class="row">
                <?php
foreach ($Hijab as $kerudung):
?>
                <div class="cell-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img style="width: 100%;" src="assets/<?=$kerudung['img']?>">
                        </div>
                        <div class="card-content p-2">
                            <a class="text-center" href="php/detail.php?id=<?=$kerudung["id"]?>"><?=$kerudung["nama"]?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>