<?php

session_start();

include 'koneksi.php';


$nama_jurusan = $_POST['nama_jurusan'];

$tanggal = date('y-m-d');
$waktu = date('h:i:s');




$sql = "INSERT INTO `tbl_jurusan` (`id_jurusan`,`nama_jurusan`,`tanggal`,`waktu`) 
		VALUES (NULL,'$nama_jurusan','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
        header("location:../list.data.jurusan.php?alert=gagal");		
	}
	else{
		
        header("location:../list.data.jurusan.php?alert=berhasil");		
	}
	
	


?>