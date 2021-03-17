<?php 
/*
	Nyimas Ayu Dinar
	203040058
	github.com/Nyimas Ayu Dinar/pw2021_203040055
	jumat 10-11
*/
$items = [
    [
        "nama"=>"Iphone x max 256gb",
        "deskripsi"=>"Iphone x max Ready lengkap new Garansi resmi 1 tahun",
        "warnaDominan"=>"Gold",
        "harga"=>10000000,
        "jumlahStok"=>10,
        "foto"=>"Iphone x max.jpeg"
    ],
    [
        "nama"=>"Iphone 7",
        "deskripsi"=>"Ready stock fullsite free ongkir free perdana Smartfren beserta kuotanya",
        "warnaDominan"=>"gold, pink",
        "harga"=>3000000,
        "jumlahStok"=>8,
        "foto"=>"Iphone 7.jpeg"
    ],
    [
        "nama"=>"Realme 6 pro ",
        "deskripsi"=>"Series terlengkap semua bergaransi resmi 1 tahun",
        "warnaDominan"=>"Merah",
        "harga"=>5450000,
        "jumlahStok"=>7,
        "foto"=>"Realme.jpeg"
    ],
    [
        "nama"=>"Iphone 8+ ",
        "deskripsi"=>"Iphone 8+ Ready lengkap new Garansi resmi 1 tahun",
        "warnaDominan"=>"gold",
        "harga"=>6650000,
        "jumlahStok"=>5,
        "foto"=>"Iphone 8+.jpeg"
    ],
    [
        "nama"=>"realme c15",
        "deskripsi"=>"Bergaransi resmi realme 1 tahun",
        "warnaDominan"=>"Abu-Abu",
        "harga"=>2200000,
        "jumlahStok"=>13,
        "foto"=>"Realme P.jpeg"
    ],
    [
        "nama"=>"Oppo A92",
        "deskripsi"=>"Semua harga sudah free ongkir dan bergaransi resmi 1 tahun",
        "warnaDominan"=>"putih",
        "harga"=>2799000,
        "jumlahStok"=>3,
        "foto"=>"Oppo A92.jpeg"
    ],
    [
        "nama"=>"oppo reno3",
        "deskripsi"=>"Semua harga sudah fullset dan free ongkir keseluruh indonesia ",
        "warnaDominan"=>"Hitam",
        "harga"=>5999000,
        "jumlahStok"=>6,
        "foto"=>"Reno3.jpeg"
    ],
    [
        "nama"=>"Samsung saries A & M",
        "deskripsi"=>"Semua harga sudah fullset dan free ongkir keseluruh indonesia",
        "warnaDominan"=>"Putih,hitam",
        "harga"=>3900000,
        "jumlahStok"=>8,
        "foto"=>"Samsung saries A & M.jpeg"
    ],
    [
        "nama"=>"Samsung Galaxy S9+",
        "deskripsi"=>"Semua harga sudah fullset dan free ongkir keseluruh indonesia",
        "warnaDominan"=>"Ungu",
        "harga"=>4500000,
        "jumlahStok"=>7,
        "foto"=>"Samsung Galaxsy S9.jpeg"
    ],
    [
        "nama"=>"Samsung Duos ",
        "deskripsi"=>"Semua harga sudah fullset dan free ongkir keseluruh indonesia",
        "warnaDominan"=>"ungu",
        "harga"=>4950000,
        "jumlahStok"=>3,
        "foto"=>"Samsung Duos.jpeg"
    ]
];

function ubahRupiah($angka){
    return "Rp" . number_format($angka,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GADGET.Pandeglang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="items" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Warna Dominan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $number => $item) : ?>
                    <tr>
                        <td><?= $number+1; ?></td>
                        <td><?= $item["nama"]; ?></td>
                        <td><?= $item["deskripsi"]; ?></td>
                        <td><?= $item["warnaDominan"]; ?></td>
                        <td><?= ubahRupiah($item["harga"]) ?></td>
                        <td><?= $item["jumlahStok"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="img/<?= $item["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable();
        } );
    </script>
</body>
</html>