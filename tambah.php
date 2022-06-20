<?php 
require 'functions.php';


if (isset($_POST["register"])) {
  
  if (tambah($_POST) > 0 ) {
     echo "<script>
        alert('Produk Berhasil Ditambahkan!');
        window.location.href='index.php';
      </script>";
  } else {
    echo mysqli_error($conn);
  }

} 
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
        #content {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h3>BREADKIOST</h3>
        </div>
    </header>

   <main>
        <div id="content">
            <h2 class="judul">Tambah Produk</h2>
            <article class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="jarak">
                         <label for="gambar">Gambar Produk</label>
                         <input type="file" id="gambar" name="gambar" required>
                    </div>
                    <div class="jarak">
                         <label for="nama">Nama Produk</label>
                         <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Produk" required>
                    </div>
                    <div class="jarak">
                         <label for="kode">Kode Produk</label>
                         <input type="text" id="kode" name="kode" placeholder="Masukkan Kode Produk" required>
                    </div>
                    <div class="jarak">
                         <label for="tgl_produksi">Tanggal Produksi</label>
                         <input type="date" id="tgl_produksi" name="tgl_produksi" required>
                    </div>
                    <div class="jarak">
                         <label for="deskripsi">Deskripsi Produk</label>
                         <textarea id="deskripsi" rows="30" name="deskripsi" required></textarea>
                    </div>
                    <div class="jarak">
                         <label for="harga">Harga Produk</label>
                         <input type="number" id="harga" name="harga" placeholder="Masukkan Harga Produk" required>
                    </div>
                    <div class="jarak">
                         <label for="stok">Stock Produk</label>
                         <input type="number" id="stok" name="stok" placeholder="Masukkan Stock Produk" required>
                    </div>
                    <div class="jarak">
                         <label for="status">Status</label>
                         <input type="radio" id="status" name="status" value="Siap Kirim" required>Siap Kirim
                         <input type="radio" id="status" name="status" value="Pre-Order" required>Pre-Order
                    </div>
                    <button type="submit" name="register" class="btn" style="width: 100%;padding:10px;background-color: lightseagreen;">Tambah</button>
                </form>
            </article>
        </div>
    </main>


    <footer>
        <p>&#169 BREADKIOST, 2021</p>
    </footer>

</body>
</html>