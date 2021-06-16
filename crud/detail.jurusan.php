<?php 
include 'koneksi.php';
?>
<?php
$id_jurusan =$_GET['id_jurusan'];
$det=mysqli_query($koneksi,"SELECT * from tbl_jurusan where id_jurusan='$id_jurusan'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>					
	
			<table border="0" width="100%;" style="padding:5px">
				
			<tr>
				<td>Nama Jurusan</td>
				<td><input type="text" class="form-control"  name="nama_jurusan" value="<?php echo $d['nama_jurusan'] ?>">
				 <input name="id_jurusan" type="text" value="<?php echo $d['id_jurusan'];?>" hidden></td>

				
			</tr>
		
			
			</table>
	<?php 
}
?>
