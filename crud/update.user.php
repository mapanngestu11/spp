<?php

session_start();

include 'koneksi.php';

	$id_user = $_POST['id_user'];
   	$username  	= $_POST['username'];
   	$password  	= $_POST['password'];
    $tanggal = date('y-m-d');
    $waktu = date('h:i:s');

$sql = "UPDATE `tbl_user` SET `username`='$username',`password`='$password',`tanggal`='$tanggal',`waktu`='$waktu' 
		 WHERE `tbl_user`.`id_user` = $id_user";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		header("location:../list.data.user.php?alert=gagal");		
	}
	else{
		
		header("location:../list.data.user.php?alert=berhasil");		
	}
	
	


?>