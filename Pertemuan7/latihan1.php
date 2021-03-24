<?php 
/*
    Nyimas Ayu Dinar
    203040058
    github.com/Nyimas Ayu Dinar/pw2021_203040058
    Pertemuan 7 (24 Maret 2021)
    Materi minggu ini mempelajari mengenai Request Method yaitu GET & POST pada PHP
*/
// Variabel Scope / lingkup variabel
// $x = 10;

// function tampilx() {
// 	global $x;
// 	echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Nyimas Ayu Dinar";
// $_GET["nrp"] = "203040058";
// var_dump($_GET);
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
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul></ul>
<?php foreach ( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["img"]; ?>"><?= $mhs["nama"]; ?></a>		
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>