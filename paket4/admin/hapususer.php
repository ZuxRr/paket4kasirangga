<?php
include_once("../conn/koneksi.php");
$id =$_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");
header("location:index.php?page=user");
?>