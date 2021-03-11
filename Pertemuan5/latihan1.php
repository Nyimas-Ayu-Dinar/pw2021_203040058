<?php
/*
	Nyimas Ayu Dinar
	203040058
	github.com/Nyimas Ayu Dinar/pw2021_203040055
	Pertemuan 5 (4  Maret 2021)
	Materi minggu ini mempelajari mengenai Array pada PHP
*/
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// menampilkan Array
// var_dumb() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);



?>