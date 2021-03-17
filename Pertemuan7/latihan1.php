<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Nyimas Ayu Dinar",
        "nrp" => "203040058",
        "email" => "ayualjabareksa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ayu4.jpg"
    ],
    [
        "nama" => "Aditya Malik Ibrahim",
        "nrp" => "21220006",
        "email" => "Adityaibrahim036@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "woman-coding.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"];?>"></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["nrp"]; ?></li>
    </ul>
<?php endforeach; ?>













</body>
</html>