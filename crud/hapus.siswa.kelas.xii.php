<?php
 include 'koneksi.php';

 $id_kelas = $_GET['id_kelas'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from tbl_kelas where id_kelas ='$id_kelas'");

 		if (!$tambahdata) {
		
            header("location:../list.data.kelas.xii.php?alert=gagal");	
	}
	else{
        header("location:../list.data.kelas.xii.php?alert=berhasil");	
	}

 	

?>