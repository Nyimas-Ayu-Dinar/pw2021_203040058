<?php
require 'function.php';
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Hijab = query(
        "SELECT * FROM hijab WHERE
        nama LIKE '%$keyword%' OR
        informasi_produk LIKE '%$keyword%' OR
        jenis LIKE '%$keyword%' OR
        harga LIKE '%$keyword%'
        "
    );
} else {
    $Hijab = query("SELECT * FROM hijab");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040058</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <style>
    img {
        max-width: 150px;
    }
    </style>
</head>

<body>
    <br><br>
    <div class="container">
        <div class="logout">
            <a href="logout.php"><button class="button alert outline">Keluar yuk</button></a>
        </div>
        <div class="add" style="padding-top: 20px;">
            <a href="tambah.php"><button class="button primary outline">Tambah Produk</button></a>
        </div><br>

        <form action="" method="get">
            <input type="text" name="keyword" data-role="input" autofocus width="500px"><br>
            <button type="submit" name="cari" class="button secondary outline">Cari</button>
        </form><br>
    </div>
    <table class="table row-border">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Informasi Produk</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($Hijab)): ?>
            <tr>
                <th colspan="7">Data tidak di temukan</th>
            </tr>
            <?php else: ?>
            <?php $i = 1;
foreach ($Hijab as $kerudung):
?>
            <tr>
                <th scope="row"><?=$i?></th>
                <td><img width="300px" src="../assets/<?=$kerudung["img"]?>" alt="foto"></td>
                <td><?=$kerudung["nama"]?> </td>
                <td><?=$kerudung["informasi_produk"]?> </td>
                <td><?=$kerudung["jenis"]?> </td>
                <td>Rp. <?=$kerudung["harga"]?> </td>
                <td>
                    <a href="ubah.php?id=<?=$kerudung["id"]?>"><button class="button info outline">Edit</button></a>

                    <a href="hapus.php?id=<?=$kerudung["id"]?>" onclick="return confirm('Hapus Data??')"><button
                            class="button warning outline">Delete</button></a>
                </td>
            </tr>
            <?php
$i++;
endforeach;
?>
            <?php endif;?>
        </tbody>
    </table>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>