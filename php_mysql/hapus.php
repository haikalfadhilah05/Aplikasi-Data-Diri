<?php 
include "koneksimysql.php";
$conn->query("delete from siswa where nis='".$_GET['nis']."'");
header("location:data.php")
?>