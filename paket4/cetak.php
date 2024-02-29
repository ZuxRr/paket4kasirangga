<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Kasir</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <center>

        <div class="p-4 main-content">

          <div class="card col-6">
            <div class="card-body">
              <p style="text-align: center">Data Pembayaran
        <?php
            include("conn/koneksi.php");

            $sql = $koneksi->query("SELECT * FROM penjualan ORDER BY idpenjualan DESC LIMIT 1");
            while ($data= $sql->fetch_assoc()) {
        ?>
               <p>ID Transaksi: <?php echo $data['idpenjualan']?></p>
                <p>Tanggal Transaksi: <?php echo $data['tanggal']?></p>
                
                <?php
                    $sql2 = $koneksi->query("SELECT * FROM pelanggan WHERE idpelanggan = '".$data['idpenjualan']."'");
                    while ($data2= $sql2->fetch_assoc()) { ?>
                      <p>Nama Pemesan: <?php echo $data2['namapelanggan'];?></p>
                      <P>No Meja: <?php echo $data2['nomeja'];?></p>
                    <?php } ?>
                    <tr>
                      ============================
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th class="col-1">Jumlah</th>
                                <th class="col-1">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                          $sql3 = $koneksi->query("SELECT * FROM detail WHERE iddetail = '" . $data['idpenjualan'] . "'");
                            
                          $totalharga = 0;

                          while ($data3= $sql3->fetch_assoc()) {
                        ?>
                            <tr>
                              <td>
                              <?php
                                $sql4 = $koneksi->query("SELECT * FROM produk WHERE idproduk = '" . $data3['idproduk'] . "' ");
                                while ($data4= $sql4->fetch_assoc()) {
                                    echo $data4['nama'];
                                }
                              ?>
                              </td>
                              <td><?php echo $data3['jumlah']?> Pcs</td>
                              <td>RP.<?php echo number_format($data3['total']) ?></td>
                             
                            </tr>

                            <?php
                              $totalproduk = $data3['jumlah'] * $data3['total'];
                              $totalharga += $totalproduk;
                            }
                            ?>

                            <tr>
                            <td colspan='2'><strong>Total Harga:</strong></td>
                            <td colspan='2'><strong>RP.<?php echo number_format("$totalharga") ?></strong></td>
                            </tr>
                            

                        </tbody>
                    </table>
                    <?php } ?>
            ============================
            <p style="text-align: center"><?php  echo date('d-m-Y H:i:s'); ?></p>
            ============================
            <p style="text-align: center">Kritik & Saran wa : 081383346022</p>
            </div>
          </div>
        </div>
        <script>
        window.print()
      </script>
  </center>
</body>
</html>