<?php
include("header.php");
?>
<style>
    #main-content {
        margin-top:40px;
    }
</style>
<body>
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
            </ul>
        </div>
    </div>
</nav>
    <div class="p-4" id="main-content"></div>
    <a href="transaksi.php" class="btn btn-md btn-primary float-end">+</a>
    <div class="card mt-5">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>tanggal transaksi</th>
                        <th>nama pemesan</th>
                        <th>no meja</th>
                        <th>menu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conn/koneksi.php");

                    $sql =$koneksi->query("SELECT * FROM penjualan ORDER BY idpenjualan DESC LIMIT 1");
                    while($data=$sql->fetch_assoc()) {
                        ?>
                    <tr>
                        <td><?php echo $data['idpenjualan']?></td>
                        <td><?php echo $data['tanggal']?></td>
                        <?php $sql2 = $koneksi->query("SELECT * FROM pelanggan WHERE idpelanggan= '".$data['idpenjualan']."'");
                        while ($data2= $sql2->fetch_assoc()) { ?>
                        <td><?php echo $data2['namapelanggan']; ?></td>
                        <td><?php echo $data2['nomeja']?></td>
                        <?php }?>
                            <td>
                            
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th class="col-1">Jumlah</th>
                                            <th class="col-1">Harga</th>
                                            <th class="col-1">Opsi</th>
                                        </tr>
                                    </thead>
                    </tbody>
                    <?php
                    $sql3 = $koneksi->query("SELECT * FROM detail WHERE iddetail= '" . $data['idpenjualan'] . "' ");
                    $totalharga = 0;
                    while ($data3= $sql3->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?php $sql4= $koneksi->query("SELECT * FROM produk WHERE idproduk = '" . $data3['idproduk'] . "'");
                                while($data4= $sql4->fetch_assoc()) {
                                    echo $data4['nama'];
                                }
                                ?>
                            </td>
                            <td> <?php echo $data3['jumlah']?> PCS</td>
                            <td>RP.<?php echo number_format($data3['total'])?></td>
                            <td><?php echo"<a href='hapusmenu.php?id=$data3[idpenjualan]' class='btn btn-sm btn-danger'>hapus</a>" ?> </td> 
                        </tr>
                        <?php
                        $totalproduk = $data3['jumlah'] * $data3['total'];
                        $totalharga+= $totalproduk;
                        }
                        ?>
                        
                        <tr>
                            <td colspan='2'><strong>TotalHarga</strong></td>
                            <td colspan='2'><strong>RP.<?php echo number_format("$totalharga") ?></strong></td>
                        </tr>
                            </table>
                        </td>
                        <?php
                        echo "</tr>";
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
                    <a href="cetak.php" target="blank" class="btn btn-md btn-success float-end">Cetak</a>
        </div>
    </div>

</body>