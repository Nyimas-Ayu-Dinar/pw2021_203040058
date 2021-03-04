<?php
/*
Nyimas Ayu Dinar
203040058
https://github.com/Nyimas Ayu Dinar-203040058/pw2021_203040058.git
Pertemuan 4 - 4 maret  2021
*/

// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("L,d-M-Y")

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlaku sejak 1 Januari 1970
echo time();
echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("L", mktime(0,0,0,8,25,1985));


// strtotime
echo date("L", Strtotime("25 aug 1985"));
?>