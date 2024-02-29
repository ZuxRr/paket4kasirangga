<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Barang</h4>
                <p class="card-description">
                    <a href="?page=tambahbarang" title="TambahProduk" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50"> <i class="fas fa-plus"></i></span>
                        <span class="text">TAMBAH PRODUK</span>
                    </a>
                </p>
                
                <div class="table-responsive">
                    <table class="table" id="DataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>ID Produk</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <td>Pilihan</td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            $sql = $koneksi->query("SELECT * FROM produk");
                            while ($data= $sql->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo "<img src='../img/".$data['foto']."' width='70' height='70'>"; ?></td>
                                    <td><?php echo $data['idproduk']?></td>
                                    <td><?php echo $data['nama']?></td>
                                    <td>Rp.<?php echo $data['harga']?></td>
                                    <td><?php echo $data['stok']?></td>
                                <td>
                                    <a href="?page=editbarang&idproduk=<?php echo$data['idproduk']?>" class="vtb btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-edit"></i></span>
                            <span class="text">edit</span>
                        </a>
                        <a href="?page=hapusbarang&idproduk=<?php echo$data['idproduk']?>" class="vtb btn-danger btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-edit"></i></span>
                            <span class="text">hapus</span>
                        </a>
                                </td>
                            </tr>
                            <?php
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 