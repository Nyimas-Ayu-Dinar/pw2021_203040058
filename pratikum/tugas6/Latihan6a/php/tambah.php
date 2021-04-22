<?php
require 'function.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil ditambahkan!');
        document.location.href='admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal ditambahkan :(!');
        document.location.href='admin.php';
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
    <title>203040058</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>

<body>
    <div class="container">
        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Batal ? :( </button></a>
        </div>
        <h3>Form Add Product Yukk gasskeun</h3>
        <form action="" method="post">
            <label for="nama">Masukan nama produk</label>
            <input type="text" placeholder="ayu" data-role="input" name="nama" id="nama" require>
            <label for="informasi_produk">Masukan Informasi Produk</label>
            <input type="text" placeholder="ayu dinar" data-role="input" name="informasi_produk" id="informasi_produk"
                require>
            <label for="jenis">Masukan Jenis Produk</label>
            <input type="text" placeholder="ayudinar" data-role="input" name="jenis" id="jenis" require>
            <label for="harga">Masukan Harga Produk</label>
            <input type="text" placeholder="20000" data-role="input" name="harga" id="harga" class="mb-1" title="">
            <label for="img">Masukan nama file Gambar Produk</label>
            <input type="text" placeholder="ayu.jpg" data-role="input" name="img" id="img" require><br>
            <button type="submit" name="tambah" class="button success outline">
                klik ini 
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>