<?php 
include ('./kwu-config.php');
$data=mysqli_query($mysqli,"DELETE FROM transaksi WHERE kode_barang='".$_GET["kode_barang"]."'");
header("location:kwu.php")
?>