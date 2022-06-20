<?php 
require 'functions.php';


$id = $_GET["id"];
$produk = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('Data Berhasil Diubah!');
        window.location.href='index.php';
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
            <h2 class="judul">Edit Produk</h2>
            <article class="card">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $produk["id"]; ?>">
                    <input type="hidden" name="gambar" id="gambar" value="<?= $produk["gambar"]; ?>">
                    <input type="hidden" name="kode" id="kode" value="<?= $produk["kode"]; ?>">
                    <input type="hidden" name="tgl_produksi" id="tgl_produksi" value="<?= $produk["tgl_produksi"]; ?>">
                    <div class="jarak">
                        <center><img src="../images/<?= $produk["gambar"]; ?>" alt="" width="150px"></center><br>
                        <center><a href="edit-gambar.php?id=<?= $produk["id"]; ?>" style="color: lightseagreen
                        ;">Ubah Gambar</a></center>
                    </div>
                     <div class="jarak">
                         <label for="nama">Nama Produk</label>
                         <input type="text" id="nama" name="nama" placeholder="Masukkan Nama produk" value="<?= $produk["nama"]; ?>" required>
                    </div>

                    <div class="jarak">
                         <label for="deskripsi">Deskripsi produk</label>
                         <input type="text" id="deskripsi" name="deskripsi" value="<?= $produk["deskripsi"]; ?>" required></input>
                    </div>
                    <div class="jarak">
                         <label for="harga">Harga produk</label>
                         <input type="text" id="harga" name="harga" value="<?= $produk["harga"]; ?>" required></input>
                    </div>
                     <div class="jarak">
                         <label for="status">Status</label>
                         <input type="radio" id="status" name="status" value="Siap Kirim" required>Siap Kirim
                         <input type="radio" id="status" name="status" value="Pre-Order" required>Pre-Order
                    </div>
                    <button type="submit" name="submit" class="btn" style="width: 100%;padding:10px;background-color: lightseagreen
                    ;">Ubah produk</button>
                </form>
            </article>
        </div>
    </main>
    

    <footer>
        <p>&#169 BREADKIOST <i class="fab fa-accusoft"></i></p>
    </footer>

</body>
</html>