<?php

session_start();

include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];
$tanggal = date('y-m-d');
$waktu = date('h:i:s');




$sql = "INSERT INTO `tbl_user` (`id_user`,`username`,`password`,`tanggal`,`waktu`) 
		VALUES (NULL,'$username','$password','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
        header("location:../list.data.user.php?alert=gagal");		
	}
	else{
		
        header("location:../list.data.user.php?alert=berhasil");		
	}
	
	


?>