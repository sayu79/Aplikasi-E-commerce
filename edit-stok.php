<?php 
require 'functions.php';


$id = $_GET["id"];
$stock = query("SELECT * FROM gudang WHERE id = $id")[0];


if (isset($_POST["submit"])) {

  if (ubahstok($_POST) > 0 ) {
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
            <h3>BREADKIOST <i class="fab fa-accusoft"></i></h3>
    </header>

   <main>
        <div id="content">
            <h2 class="judul">Edit Stock Produk</h2>
            <article class="card">
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $stock["id"]; ?>">
                    <input type="hidden" name="kode" id="kode" value="<?= $stock["kode"]; ?>">
                    <div class="jarak">
                         <label for="stok">Stock produk</label>
                         <input type="number" id="stok" name="stok" value="<?= $stock["stok"]; ?>"required></input>
                    </div>
                    <button type="submit" name="submit" class="btn" style="width: 100%;padding:10px;background-color: lightseagreen;">Ubah produk</button>
                </form>
            </article>
        </div>
    </main>

    <footer>
        <p>&#169 BREADKIOST <i class="fab fa-accusoft"></i> 2021</p>
    </footer>

</body>
</html>