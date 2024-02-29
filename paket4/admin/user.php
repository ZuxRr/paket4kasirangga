<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar User</h4>
                    <?php
                    if($level=='admin') {
                    ?>
                <p class="card-description">
                    <a href="?page=tambahuser" title="Tambah Produk" 
                        class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                            <span class="text">TAMBAH USER</span></a></p>
                    <?php
                        }
                    ?>
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>Level</th>
                                    <?php
                                    if($level=='admin') {
                                    ?>
                                    <th>pilihan</th>   
                                    <?php
                                            }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM user");
                                while ($data= $sql->fetch_assoc()) {
                                    
                            ?>
                        <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['username']?></td>
                        <td><?php echo str_repeat('-', strlen($data['password']))?></td>
                        <td><?php echo $data['level']?></td>
                        <td>
                        <?php
            if($level=='admin') {
        ?>
                        <a href="?page=edituser&id=<?php echo $data['id']?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="?page=hapususer&id=<?php echo $data['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus user ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
                        <?php
            }
        ?>
                    </td>
                 </tr>
                    </tr>
                        <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>