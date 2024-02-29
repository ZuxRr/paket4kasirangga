<?php
include("conn/koneksi.php");
include("header.php");
?>
<style>
        .main-content {
            margin-top: 62px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            margin-bottom: 20px;
        }
        
    </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Pelanggan</a>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a href="transaksi.php" class="nav-link">Transaksi</a>
                </li>
                <li class="nav-item active">
                    <a href="daftartransaksi.php" class="nav-link">Daftar Transaksi</a>
                </li>
            </ul>
        </div>
        <a href="admin/login.php" class="float-end btn btn-light mx-2 shadow">Login Admin/Petugas</a>
    </div>
</nav>


<div class="main-content">
       <div class="row p-5 bg-dark text-light">
        <div class="col-md-12 p-5">
            <h2>Selamat Datang, Pelanggan!</h2>
            <p>Disini kami menyediakan aneka macam makanan dan minuman yang dijual secara online. pilih menu lalu klik beli untuk membeli</p>
            
        </div>
    </div>
</div>

    <style>
        .daftartransaksi {
            margin-top: 60px;
            margin-right: 100px;
            margin-left: 100px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            margin-bottom: 20px;
        }
    </style>



    <div class="main-content daftartransaksi">
        <!-- Form pencarian -->
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="Cari produk..." name="search">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>

        <div class="card-container">
            <?php

            if (isset($_GET['search'])) {
                $keyword = $_GET['search'];
                $sql = $koneksi->query("SELECT * FROM produk WHERE nama LIKE '%$keyword%'");
            } else {
                $sql = $koneksi->query("SELECT * FROM produk");
            }

            while ($data = $sql->fetch_assoc()) {
            ?>
                <div class='card' style='width:18rem; margin:10px;'>
                    <?php echo "<img class='card-img-top' src='img/" . $data['foto'] . "' width='230' height='250'>" ?>
                    <div class='card-body'>
                        <h5 class='card-title'><?php echo $data['nama'] ?></h5>
                        <p class='card-text'>Harga RP.<?php echo number_format($data['harga']) ?></p>
                        <p class='card-text'>stok: <?php echo $data['stok'] ?></p>
                        <a class="btn btn-md btn-primary float-end" href='transaksi.php'>Beli</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    