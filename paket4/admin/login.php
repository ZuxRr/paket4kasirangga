<?php
include "../conn/koneksi.php";
error_reporting(0);
session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows >0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];

        header("location: index.php");
        echo "<script>alert('berhasil masuk')</script>";
    } else {
        echo "<script>alert('username atau password kamu salah,,dicoba lagi yahhh cmiwwwwwwwww')</script>";
    }

    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>ramaku sayang</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <form action="" class="form-signin" method="post">

                            <center><h3 class="">LOGIN</h3></center>
                            <div class="card-body">
                                <form action="" method="port">
                              <div class="mb-3 mt-3">
                                <table for="" class="form-label">nama</table>
                                <input type="text" name="username" class="form-control" require autofocus>
                              </div>
                              <div class="mb-3 mt-3">
                              <table for="" class="form-label">password</table>
                              <input type="password" name="password" class="form-control" require autofocus>
                              </div>
                              <button name="submit" class="btn btn-primary">login</button>
                                </form>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../bootstrap/jquery.min.js"></script>
        <script src="../bootstrap/bootstrap.min.js"></script>
    </body>
</html>
