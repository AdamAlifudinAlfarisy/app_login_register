<?php
include('../config/koneksi.php');

$ID     = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM anggota WHERE ID = $ID");

if($delete) {
	header('location:../index.php?aksi=delete&status=true');
}
else {
	header('location:../index.php?aksi=delete&status=false');
}
?>