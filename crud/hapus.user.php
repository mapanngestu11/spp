<?php
 include 'koneksi.php';

 $id_user = $_GET['id_user'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from tbl_user where id_user ='$id_user'");

 		if (!$tambahdata) {
		
            header("location:../list.data.user.php?alert=gagal");	
	}
	else{
        header("location:../list.data.user.php?alert=berhasil");	
	}

 	

?>