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
						<h2>Tabs</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>UI Elements</span></li>
								<li><span>Tabs</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<!-- default / right -->
					<div class="row">
						<div class="col-md-6">
							<div class="tabs">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs">
								<ul class="nav nav-tabs text-right tabs-primary">
									<li class="active">
										<a href="#popular7" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent7" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular7" class="tab-pane active">
										<p>Popular <code>.nav-tabs.nav-right</code></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent7" class="tab-pane">
										<p>Recent <code>.nav-tabs.nav-right</code></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- bottom -->
					<div class="row">
						<div class="col-md-6">
							<div class="tabs tabs-bottom">
								<div class="tab-content">
									<div id="popular13" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent13" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular13" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent13" data-toggle="tab">Recent</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs tabs-bottom tabs-primary">
								<div class="tab-content">
									<div id="popular14" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent14" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
								<ul class="nav nav-tabs nav-right">
									<li class="active">
										<a href="#popular14" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent14" data-toggle="tab">Recent</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- justified -->
					<div class="row">
						<div class="col-md-6">
							<div class="tabs">
								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a href="#popular10" data-toggle="tab" class="text-center"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent10" data-toggle="tab" class="text-center">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular10" class="tab-pane active">
										<p>Popular <code>.nav-tabs.nav-justified</code></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent10" class="tab-pane">
										<p>Recent <code>.nav-tabs.nav-justified</code></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="tabs tabs-bottom tabs-primary">
								<div class="tab-content">
									<div id="popular8" class="tab-pane active">
										<p>Popular <code>.nav-tabs.nav-justified</code></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent8" class="tab-pane">
										<p>Recent <code>.nav-tabs.nav-justified</code></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
								<ul class="nav nav-tabs nav-justified">
									<li class="active">
										<a href="#popular8" data-toggle="tab" class="text-center"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent8" data-toggle="tab" class="text-center">Recent</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- vertical -->
					<div class="row">
						<div class="col-md-6">
							<div class="tabs tabs-vertical tabs-left">
								<ul class="nav nav-tabs col-sm-3 col-xs-5">
									<li class="active">
										<a href="#popular11" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent11" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular11" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent11" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs tabs-vertical tabs-right tabs-primary">
								<div class="tab-content">
									<div id="popular12" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent12" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
								<ul class="nav nav-tabs col-sm-3 col-xs-5">
									<li class="active">
										<a href="#popular12" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent12" data-toggle="tab">Recent</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- states -->
					<div class="row">
						<div class="col-md-6">
							<div class="tabs tabs-primary">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular1" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent1" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular1" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent1" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs tabs-success">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular2" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent2" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular2" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent2" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="tabs tabs-warning">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular3" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent3" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular3" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent3" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs tabs-danger">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular4" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent4" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular4" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent4" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="tabs tabs-info">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular5" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent5" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular5" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent5" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="tabs tabs-dark">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#popular6" data-toggle="tab"><i class="fa fa-star"></i> Popular</a>
									</li>
									<li>
										<a href="#recent6" data-toggle="tab">Recent</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="popular6" class="tab-pane active">
										<p>Popular</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
									<div id="recent6" class="tab-pane">
										<p>Recent</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
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