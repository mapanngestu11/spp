<?php
 include 'koneksi.php';

 $id_jurusan = $_GET['id_jurusan'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from tbl_jurusan where id_jurusan ='$id_jurusan'");

 		if (!$tambahdata) {
		
            header("location:../list.data.jurusan.php?alert=gagal");	
	}
	else{
        header("location:../list.data.jurusan.php?alert=berhasil");	
	}

 	

?>