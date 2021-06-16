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

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

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
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
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
				
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Data Kelas</span></li>
								<li><span>Detail Siswa</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div>
					</header>

					<!-- start: page -->

					<!-- default / right -->
					<div class="row">
							<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular" data-toggle="tab"><i class="fa fa-user"></i> Data Diri</a>
									</li>
								
								</ul>
								<?php 
									include 'koneksi.php';
									?>
									<?php
									$id_kelas =$_GET['id_kelas'];
									$det=mysqli_query($koneksi,"SELECT * from tbl_kelas where id_kelas='$id_kelas'")or die(mysqli_error($koneksi));
									while($d=mysqli_fetch_array($det)){
									?>					
	
								<div class="tab-content">
									<div id="popular" class="tab-pane active">
									
								<form action="crud/update.siswa.kelas.xi.php" method="post" enctype="multipart/form-data">				
								<div class="row">
									<div class="form-group col-md-4">
									<?php echo "<img src='crud/gambar/$d[foto]' width='250' height='380' />";?>
									<br>
									<br>
									<label>Ubah Foto</label>
									<input type="file" name ="foto" class="form-control">
									</div>
									<div class="form-group col-md-6">
									<label>Nama Siswa</label>
									<input type="text" class="form-control"  name="nama_siswa" value="<?php echo $d['nama_siswa'] ?>" required>
									<input name="id_kelas" type="text" value="<?php echo $d['id_kelas'];?>" hidden>
									<input name="kelas" type="text" value="<?php echo $d['kelas'];?>" hidden>
									</div>
									<div class="form-group col-md-6">
									<label>Jurusan</label>
									<select name="nama_jurusan" class="form-control" required>
									<option value="<?php echo $d['nama_jurusan'];?>"><?php echo $d['nama_jurusan'];?></option>
									
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
														
									</select>
								
									</div>
									<div class="form-group col-md-6">
									<label>Jenis Kelamin</label>
									<select name="jen_kel" class="form-control" required>
									 <option value="<?php echo $d['jen_kel'];?>"><?php echo $d['jen_kel'];?></option>
									 <option value="Perempuan">Perempuan</option>
									 <option value="Laki-Laki">Laki-Laki</option>
									</select>
									</div>
									<div class = "row">
									<div class="form-group col-md-3">
									<label>Nama Ayah</label>
									<input type="text" class="form-control"  name="nama_ayah" value="<?php echo $d['nama_ayah'] ?>"required>
									</div>
									<div class="form-group col-md-3">
									<label>Nama Ibu</label>
									<input type="text" class="form-control"  name="nama_ibu" value="<?php echo $d['nama_ibu'] ?>" required>
									</div>
									<div class="form-group col-md-6">
									<label>No Hp</label>
									<input type="text" class="form-control"  name="no_hp_ortu" value="<?php echo $d['no_hp_ortu'] ?>" required>
									</div>
									</div>
								

								</div>
					
								</div>
								<a href="list.data.kelas.xi.php" class="btn btn-round btn-primary">Kembali</a>
								<input type="submit" class="btn btn-success" value="simpan">
								</div>
								
								</div>
							
								
								</div>
							</div>
											
												<?php 
									}
												?>
					</div>

				
									</form>

				
					
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>