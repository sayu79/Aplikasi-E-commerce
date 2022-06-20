<?php 
require 'functions.php';


$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (ubahgambar($_POST) > 0 ) {
    echo "
      <script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Gagal Diubah!');
        
      </script>
    ";
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
            <h2 class="judul">Ubah Gambar Baru</h2>
            <article class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $produk["id"]; ?>">
                    <input type="hidden" name="kode" id="kode" value="<?= $produk["kode"]; ?>">
                    <input type="hidden" name="nama" id="nama" value="<?= $produk["nama"]; ?>">
                    <input type="hidden" name="deskripsi" id="deskripsi" value="<?= $produk["deskripsi"]; ?>">
                    <input type="hidden" name="harga" id="harga" value="<?= $produk["harga"]; ?>">
                    <div class="jarak">
                         <label for="gambar">Gambar Produk Baru</label>
                         <input type="file" id="gambar" name="gambar" required>
                    </div>
                    <button type="submit" name="submit" class="btn" style="width: 100%;padding:10px;background-color: royalblue;">Ubah Gambar</button>
                </form>
            </article>
        </div>
    </main>

    <footer>
        <p>&#169 BREADKIOST <i class="fas fa-gem"></i> 2021</p>
    </footer>

</body>
</html>