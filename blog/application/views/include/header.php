<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Fonts-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/fonts/fontawesome/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/fonts/pe-icon/pe-icon.css">
	<!-- Vendors-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/vendors/bootstrap/grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/vendors/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/vendors/swiper/swiper.css">
	<!-- App & fonts-->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,700">
	<link rel="stylesheet" type="text/css" id="app-stylesheet" href="<?php echo base_url('assets/frontend/'); ?>assets/css/main.css"><!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
<div class="page-wrap" id="root">

	<!-- header -->
	<header class="header header--fixed">
		<div class="header__inner">
			<div class="header__logo"><a href="index.html"><img src="<?php echo base_url('assets/frontend/'); ?>assets/img/logo.png" alt="" style="width: 122px;"/></a></div>
			<div class="navbar-toggle" id="fs-button">
				<div class="navbar-icon"><span></span></div>
			</div>
		</div>

		<!-- fullscreenmenu__module -->
		<div class="fullscreenmenu__module" trigger="#fs-button">

			<!-- overlay-menu -->
			<nav class="overlay-menu">

				<!--  -->
				<ul class="wil-menu-list">
					<li class="current-menu-item"><a href="index.html">Home</a>
					</li>
					<li><a href="about.html">About</a>
					</li>
					<li><a href="work.html">Work</a>
					</li>
					<li><a href="blog.html">Blog</a>
					</li>
					<li><a href="contact.html">Contact</a>
					</li>
				</ul><!--  -->

			</nav><!-- End / overlay-menu -->

		</div><!-- End / fullscreenmenu__module -->

	</header><!-- End / header -->
