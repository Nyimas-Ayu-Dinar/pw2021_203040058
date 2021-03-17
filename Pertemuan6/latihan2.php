<?php
// $mahasiswa =[
//     ["Nyimas Ayu Dinar", "203040058","ayualjabareksa@gmail.com", "Teknik Informatika"],
//     ["Aditya Malik Ibrahim", "21220006","Adityaibrahim036@gmail.com", "Teknik Industri"]
// ];

// Array Associstive
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Nyimas Ayu Dinar",
        "nrp" => "203040058",
        "email" => "ayualjabareksa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ayu4.jpeg"
    ],
    [
        "nama" => "Aditya Malik Ibrahim",
        "nrp" => "21220006",
        "email" => "Adityaibrahim036@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "woman.jpeg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>



    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?=  $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>


</body>
</html>