<?php
$id = $_GET ['id'];
$sql = "SELECT * FROM user WHERE id =$id";
$result = $koneksi->query($sql);

$data = $result->fetch_assoc();

if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $level = $_POST['level'];
    $password = md5($_POST['password']);

    $result = mysqli_query($koneksi, "UPDATE user SET username='$name', password='$password', level='$level' WHERE id='$id'");
echo"<script>alert('berhasil mengedit data user');window.location.href='?page=user';</script>";

}
?>
<div class="row">
    <div class="card well">
        <div class="card-header">
            <h3 class="">EDITUSER</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" class="form-control" value="<?php echo $data ['username'];?>" id="nama" placeholder="Enter Name" name="username">
                </div>
                <div class="mb-3 mt-3">
                    <label for="pwd" class="form-label">password:</label>
                    <input type="password" class="form-control" value="<?php echo $data ['password'];?>" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3">
                            <label for="level" class="form-label">Level<span style="color: red;"> *</span></label>
                            <select class="form-control" name="level" id="level">
                                <?php if ($data['level'] == "Admin") { ?>
                                    <option value="Admin">Admin</option>
                                    <option value="Petugas">Petugas</option>
                                <?php } else { ?>
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Edit</button>   
            </form>
        </div>
    </div>
</div>