<?php 
/*
    Nyimas Ayu Dinar
    203040058
    github.com/Nyimas Ayu Dinar/pw2021_203040058
    Pertemuan 7 (24 Maret 2021)
    Materi minggu ini mempelajari mengenai Request Method yaitu GET & POST pada PHP
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
	<h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>

</body>
</html>