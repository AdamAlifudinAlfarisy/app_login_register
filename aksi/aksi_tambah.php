<?php

include('../config/koneksi.php');

$nama_lengkap  = $_POST['nama'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn_lahir'] . '-' . $_POST['bln_lahir'] . '-' . $_POST['tgl_lahir'];
$alamat        = $_POST['alamat'];
$kota          = $_POST['kota'];
$negara        = $_POST['negara'];
$kode_pos      = $_POST['kode_pos'];
$no_hp		   = $_POST['no_hp'];
$email         = $_POST['email'];
$tinggi_badan  = $_POST['tinggi_badan'];
$berat_badan   = $_POST['berat_badan'];

$query = mysqli_query($connect, "INSERT INTO anggota(nama_lengkap, tempat_lahir, tanggal_lahir, alamat, kota, negara, kode_pos, no_hp, email, tinggi_badan, berat_badan) 
	VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$kota', '$negara', '$kode_pos', '$no_hp', '$email', '$tinggi_badan', '$berat_badan')");

if($query) {
	header('location:../index.php?aksi=tambah&status=true');
}
else {
	header('location:../index.php?page=tambah&status=false');
}

?>