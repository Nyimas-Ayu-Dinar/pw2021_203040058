<?php 
/*
	Nyimas Ayu Dinar
	203040058
	github.com/Nyimas Ayu Dinar/pw2021_203040055
	jumat 10-11
*/
    $nama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            border: 2px solid black;
            width: 50%;
            padding: 10px;
        }
        p {
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <p>Daftar pemain bola terkenal</p>
            <ol>
                <?php foreach($nama as $n) : ?>                   
                        <li><?= $n; ?></li>                  
                <?php endforeach ?>
            </ol>
            <?php
                array_push($nama, 'Luca Modrie', 'Sadio Mane');
                sort($nama);
            ?>
            <p>Daftar pemain bola terkenal baru</p>
            <ol>
                <?php foreach($nama as $n) : ?>                   
                        <li><?= $n; ?></li>                  
                <?php endforeach ?>
            </ol>
           
    </div>
</body>
</html>