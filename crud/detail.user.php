<?php 
include 'koneksi.php';
?>
<?php
$id_user =$_GET['id_user'];
$det=mysqli_query($koneksi,"SELECT * from tbl_user where id_user='$id_user'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>					
	
			<table border="0" width="100%;" style="padding:5px">
				
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control"  name="username" value="<?php echo $d['username'] ?>">
				 <input name="id_user" type="text" value="<?php echo $d['id_user'];?>" hidden></td>

				
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" class="form-control"  name="password" value="<?php echo $d['password'] ?>">		
			</tr>
		
			
			
			</table>
	<?php 
}
?>
