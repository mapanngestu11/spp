<?php

session_start();

include 'koneksi.php';

	$id_jurusan = $_POST['id_jurusan'];
   	$nama_jurusan  	= $_POST['nama_jurusan'];
 
    $tanggal = date('y-m-d');
    $waktu = date('h:i:s');

$sql = "UPDATE `tbl_jurusan` SET `nama_jurusan`='$nama_jurusan',`tanggal`='$tanggal',`waktu`='$waktu' 
		 WHERE `tbl_jurusan`.`id_jurusan` = $id_jurusan";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		header("location:../list.data.jurusan.php?alert=gagal");		
	}
	else{
		
		header("location:../list.data.jurusan.php?alert=berhasil");		
	}
	
	


?>