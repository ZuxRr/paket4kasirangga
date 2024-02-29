<?php
include_once("conn/koneksi.php");
$id= $_GET['id'];
$sql = $koneksi->query("DELETE FROM detail WHERE idpenjualan=$id");
echo"<script>alert('data berhasil di hapus cmiwwwwww'); window.location.href= 'daftartransaksi.php';</script>";
?>