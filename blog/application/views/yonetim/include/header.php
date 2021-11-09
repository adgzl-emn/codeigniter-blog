<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
	<!-- Css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/backend/'); ?>./dist/styles.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/backend/'); ?>./dist/all.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
<?php $info = $this->session->userdata('info'); ?>
<?php foreach ($info as $info){ ?>
<!--Container -->
<div class="mx-auto bg-grey-400">
	<!--Screen-->
	<div class="min-h-screen flex flex-col">
		<!--Header Section Starts Here-->
		<header class="bg-nav">
			<div class="flex justify-between">
				<div class="p-1 mx-3 inline-flex items-center">
					<i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
					<h1 class="text-white p-2">-----Hoşgeldinnn <?php echo $info->isim?>-----</h1>
				</div>
				<div class="p-1 flex flex-row items-center">
					<a href="<?php echo base_url('yonetim/cikis'); ?>"><i class="bi bi-box-arrow-left"></i>Çıkış Yap</a>

					<img onclick="profileToggle()" class="inline-block h-12 w-12 rounded-full" src="https://haruncan.com/wp-content/uploads/2010/02/wall-e.jpg" alt="">



				</div>
			</div>
		</header>
		<!--/Header-->
<?php } ?>
