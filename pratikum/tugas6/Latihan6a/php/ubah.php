<?php
require 'function.php';
$id = $_GET['id'];
$Hijab = query("SELECT * FROM hijab WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil diubah!');
        document.location.href='admin.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal diubah!');
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
            <a href="admin.php"><button class="button alert outline">Cancel</button></a>
        </div>
        <h3>Form Edit Product</h3>
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?=$Hijab['id']?>">
            <label for="nama">Nama Produk</label>
            <input type="text" data-role="input" name="nama" id="nama" value="<?=$Hijab['nama']?>" require>
            <label for="informasi_produk">Informasi Produk</label>
            <input type="text" data-role="input" name="informasi_produk" id="informasi_produk"
                value="<?=$Hijab['informasi_produk']?>" require>
            <label for="jenis">Jenis Produk</label>
            <input type="text" data-role="input" name="jenis" id="jenis" value="<?=$Hijab['jenis']?>" require>
            <label for="harga">Harga Produk</label>
            <input type="text" data-role="input" name="harga" id="harga" value="<?=$Hijab['harga']?>" class="mb-1"
                title="">
            <label for="img">Nama file gambar produk</label>
            <input type="text" data-role="input" name="img" id="img" value="<?=$Hijab['img']?>" require>
            <button type="submit" name="ubah" class="button success outline">
                Edit Product
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>