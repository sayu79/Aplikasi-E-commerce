<?php 
require 'functions.php';

  $produk = mysqli_query($conn, "SELECT * FROM produk LEFT JOIN gudang ON produk.id = gudang.id");
  $total_produk = mysqli_num_rows($produk);
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <title>BREADKIOST</title>
    <style>
        .btn {
            text-decoration: none;
            padding: 3px 10px;
            background-color: darkred;
        } 
    </style>
</head>

<body>
     <header>
        <nav>
            <ul>
                <li><a href="pesanan.php">Data Pesanan</a></li>
                <li><a href="../logout.php" class="btn" style="border-bottom: none;">Logout</a></li>
            </ul>
        </nav>
        <div class="jumbotron">
            <h3>BREADKIOST</h3>
        </div>
    </header>

    <main>
         <article class="card">
                <center><h3 style="color:lightseagreen;">Katalog Produk</h3></center>
        </article>

        <div id="content">
            <?php foreach ($produk as $p) : ?>
            <div class="flex">
                <div class="card">
                    <center>
                    <img src="../images/<?= $p["gambar"]; ?>" class="featured-image">
                    <h4><?= $p["nama"]; ?></h4>
                    <p><?= $p["deskripsi"]; ?></p>
                    <p>Harga : <b><?= $p["harga"]; ?></b></p>
                    <p>Stock : <b><?= $p["stok"]; ?></b></p>
                    <p>Tanggal Produksi : <b><?= $p["tgl_produksi"]; ?></b></p>
                    <p style="color: green;"><b><?= $p["status"]; ?></b></p>
                    <p><a href="edit-item.php?id=<?= $p["id"]; ?>" class="btn" style="background-color: orange;">Edit</a></p>
                    <p><a href="edit-stok.php?id=<?= $p["id"]; ?>" class="btn" style="background-color: orange;">Edit Stock</a></p>
                    <p><a href="hapus-item.php?id=<?= $p["id"]; ?>" class="btn">Hapus</a></p>
                    </center>
               </div>
            </div>
            <?php endforeach; ?>
        </div>

        <aside>
            <div class="card">
                <center><p>Total Produk : <b><span style="color: lightseagreen;"><?= $total_produk; ?></span></b></p></center>
            </div>

            <a href="tambah.php" style="text-decoration: none;"><div class="card">
                <center><p>Tambah Produk</p></center>
            </div></a>

            <a href="pesanan.php" style="text-decoration: none;">
                <div class="card">
                    <center>Data Pesanan Pelanggan</center>
                </div>
            </a>

            <a href="laporan.php" style="text-decoration: none;">
                <div class="card">
                    <center>Laporan Penjualan</center>
                </div>
            </a>
        </aside>
           
    </main>

    <footer>
        <p>&#169 BREADKIOST 2021</p>
    </footer>

</body>
</html>