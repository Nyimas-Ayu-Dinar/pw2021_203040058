<?php
/*
Nyimas Ayu Dinar
203040058
https://github.com/Nyimas Ayu Dinar-203040058/pw2021_203040058.git
Pertemuan 4 - 4 maret  2021
*/

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Nyimas Ayu"); ?></h1>
</body>
</html>