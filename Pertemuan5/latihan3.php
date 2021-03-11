<?php
/*
	Nyimas Ayu Dinar
	203040058
	github.com/Nyimas Ayu Dinar/pw2021_203040055
	Pertemuan 5 (11 Maret 2021)
	Materi minggu ini mempelajari mengenai Array pada PHP
*/
$mahasiswa = [
    ["Nyimas Ayu Dinar", "203040058", "Teknik Informatika", "ayualjabareksa@gmail.com"],
    ["Aditya Malik Ibrahim", "21220006", "Teknik Industri", "Adityaibrahim036@gmail.com"]
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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>