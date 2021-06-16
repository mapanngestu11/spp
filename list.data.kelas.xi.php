<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Administrator</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
		<?php include 'css.head.php';?>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
			
			
				
			
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
					
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				<?php include 'pages/submenu.php';?>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Data Siswa Kelas XI</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data Siswa</span></li>
								<li><span>Data Siswa Kelas XI</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>

					<!-- start: page -->
				
 <?php 
 if(isset($_GET['alert'])){
   if($_GET['alert']=='gagal_ekstensi'){
	 ?>
	 <div class="alert alert-warning alert-dismissible">
	   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	   <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
	   Ekstensi Tidak Diperbolehkan
	 </div>                
	 <?php
   }elseif($_GET['alert']=="gagal_ukuran"){
	 ?>
	 <div class="alert alert-warning alert-dismissible">
	   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	   <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
	  File Gagal Terkirim !
	 </div>                
	 <?php
   }elseif($_GET['alert']=="berhasil"){
	 ?>
	 <div class="alert alert-success alert-dismissible">
	   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	   <h4><i class="icon fa fa-check"></i> Success</h4>
	   Berhasil Disimpan
	 </div>                
	 <?php
   }
   elseif($_GET['alert']=="gagal"){
	 ?>
	 <div class="alert alert-danger alert-dismissible">
	   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	   <h4><i class="icon fa fa-check"></i> Peringatan</h4>
	   Data tidak terkirim !
	 </div>                
	 <?php
   }
 }
 ?>				<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Data Siswa Kelas XI</h2>
							</header>
							<div class="panel-body">
								<a class="modal-with-form btn btn-primary" href="#modalForm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
								<a href="list.data.kelas.xi.php" id="portletRefresh" type="button" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-refresh"></i> Refresh</a>
								<br>

								<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Tambah Siswa</h2>
											</header>
											
											<div class="panel-body">
											<form  action="crud/add.siswa.kelas.xi.php" method="post" id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate" enctype="multipart/form-data">
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Nama</label>
														<div class="col-sm-9">
															<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Lengkap" required/>
															<input type="hidden" name="kelas" class="form-control" value="XI"  />
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Jurusan</label>
														<div class="col-sm-9">
														<select name="nama_jurusan" class="form-control" required>
                          <option value="">--Pilih--</option>

                              <?php

                              require_once 'koneksi.php';
                              $query = "SELECT  * FROM tbl_jurusan ;";
                              $result = mysqli_query($koneksi, $query);
                              ?>
                              <?php 
                              while ($data = mysqli_fetch_assoc($result)) {
                                ?>

                                <option value="<?php echo $data['nama_jurusan'];?>"><?php echo $data['nama_jurusan'] ;?></option>  

                                <?php } ?>
                                <div style="color:red"><?php echo isset($error['nama_jurusan']) ? $error['nama_jurusan'] : '';?></div>
                              </select>
														</div>
													</div>
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Jenis Kelamin</label>
														<div class="col-sm-9">
															<select name="jen_kel" class="form-control" required>
																<option value="">--Pilih--</option>
																<option value="Laki-Laki">Laki-Laki</option>
																<option value="Perempuan">Perempuan</option>

															</select>
														</div>
													</div>
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Nama Ayah</label>
														<div class="col-sm-9">
															<input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" required/>
														</div>
													</div>
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Nama Ibu</label>
														<div class="col-sm-9">
															<input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required/>
														</div>
													</div>
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">No HP</label>
														<div class="col-sm-9">
															<input type="text" name="no_hp_ortu" class="form-control" placeholder="0878xxx" required/>
														
														</div>
													</div>

													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label">Upload File</label>
														<div class="col-sm-9">
													<div class="input-group input-group-icon">
														<span class="input-group-addon">
															<span class="icon"><i class="fa fa-file"></i></span>
														</span>
														<input type="file" name ="foto" class="form-control" placeholder="Left icon">
														<P>Format harus berupa : png, jpg, jpeg.</p>
													</d
													iv>
												</div>
													</div>
											
											</div>
											
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<input type="submit" class="btn btn-primary" value="simpan">
														<button class="btn btn-default modal-dismiss">Cancel</button>
													</div>
												</div>
											</footer>

											</form>
										
										</section>
									</div>

								<br>
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>No</th>
											<th>Foto</th>
											<th>Nama siswa</th>
											<th>Jurusan</th>
										
										
											<th class="hidden-phone">Di update pada Tanggal</th>
											<th class="hidden-phone">Di update pada Waktu</th>
											<th>Edit</th>
											<th>Hapus</th>
										</tr>
									</thead>
									<tbody>
									<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tbl_kelas where kelas = 'XI'"); 
		while($d = mysqli_fetch_array($data)){
			?>
										<tr class="gradeX">
											<td><?php echo $no++; ?></td>
											<td><?php echo "<img src='crud/gambar/$d[foto]' width='70' height='90' />";?></td>
											<td><?php echo $d['nama_siswa']; ?></td>
											<td><?php echo $d['nama_jurusan']; ?></td>
										
											<td class="center hidden-phone"><?php echo $d['tanggal']; ?></td>
											<td class="center hidden-phone"><?php echo $d['waktu']; ?></td>
											<td align="center"><a onclick="if(confirm('Apakah anda yakin ingin mengubah data ini ?')){ location.href='detail.kelas.xi.php?id_kelas=<?php echo $d['id_kelas']; ?>' }" class="btn btn-round btn-warning"><i class="fa fa-pencil"></i></a></td>
											<td align="center"><a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ?')){ location.href='crud/hapus.siswa.kelas.xi.php?id_kelas=<?php echo $d['id_kelas']; ?>' }" class="btn btn-round btn-danger"><i class="fa fa-trash-o"></i></a></td>
										</tr>
										
		<?php
		}
		?>
									</tbody>
								</table>
							</div>
						</section>
				
					
					<!-- end: page -->
				</section>
			</div>


	
		
		</section>
		
		<!-- modal -->
		<div class="modal fade" id="detailPesan" tabindex="-1" role="dialog" aria-labelledby="Tambah Barang" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="Tambah Barang">Detail Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
          <form action="crud/update.user.php" method="post" >
          <div class="modal-body" id="bodyDetail">

          </div>

          <div class="modal-footer">
          <button type="submit" class="btn btn-warning btn-round"><i class="fa fa-check"></i> Ubah Data</button>
          </form> 
          </div>     
    </div>

    </div>
 </div>

		<!-- end modal -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
		<?php include 'css.footer.php';?>
		<script type="text/javascript">
    $('.btn-detail').click(function(){
      $.get('crud/detail.kelas.php?id_kelas='+$(this).data('id'),function(data){
        console.log(data)
        $('#bodyDetail').html(data)
        $('#bodyDetail :input')
      })
    })
    </script>
	</body>
</html>