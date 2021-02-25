<?php 
// pertemuan 2 - PHP Dasar
// Sintaks PHP 

// Standar Output
// echo, print
// Print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Nyimas";
// echo 'Halo, nama saya $nama';

// Operator
// arimatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
// $nama_depan = "Nyimas";
// $nama_belakang = "Ayu";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x =1;
// $x -= 5;
// echo $x;
$nama = "Nyimas";
$nama .= " ";
$nama .= "Ayu";
echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1");

// Logika 
// &&, ||, ! 
// $x = 10;
// var_dump($x < 20 || $x % 2 == 0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    
</body>
</html>