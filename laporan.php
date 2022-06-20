<?php 
require 'functions.php';

  $pesanan = mysqli_query($conn, "SELECT * FROM pesanan");
  $keuntungan = mysqli_query($conn, "SELECT SUM(total_bayar) AS balance FROM pesanan");
  foreach ($keuntungan as $balance) {}
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
        table {
            border-radius: 4px;
        }
        td, th {
            padding: 20px 50px;
        }
        th {
            border-bottom: 1px solid lightseagreen;
        }
        .blink {
        animation: blinker 0.6s linear infinite;
        color: #1c87c9;
        font-size: 17px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
      .blink-one {
        animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {
        0% {
          opacity: 0;
        }
      }
      .blink-two {
        animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {
        100% {
          opacity: 0;
        }
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
                <center><h3 style="color:lightseagreen;">Laporan Penjualan</h3></center>
        </article>


            
            <div class="flex">
                <div class="card">
                    <center>
                    <table>
                        <tr>
                            <th>Produk</th>
                            <th>Tanggal Transaksi</th>
                            <th>Harga</th>
                        </tr>
                    <?php foreach ($pesanan as $p) : ?>
                        <tr>
                            <td><?= $p["produk"]; ?></td>
                            <td><?= $p["tanggal"]; ?></td>
                            <td><?= $p["total_bayar"]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                    </center>
                    
                    <br><br>
                    <table>
                        <tr>
                            <center>Total Keuntungan : <span class="blink blink-one"><?= $balance["balance"]; ?></span></center>
                        </tr>
                    </table>
               </div>
            </div>
            

           
    </main>

    <footer>
        <p>&#169 BREADKIOST 2021</p>
    </footer>

</body>
</html>