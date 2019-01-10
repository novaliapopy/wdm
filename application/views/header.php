<!DOCTYPE html>
<html>
<head>
	<title>Home Wahyu Daya Mulia</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Materialize icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- Materialize CSS -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/');?>css/materialize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/');?>css/materialize.min.css">
	<!-- Materialize JavaScript -->
	<script src="<?php echo base_url('/assets/');?>js/materialize.js"></script>
	<script src="<?php echo base_url('/assets/');?>js/materialize.min.js"></script>
	<script src="<?php echo base_url('/assets/');?>js/scrool.js"></script>
	<script src="<?php echo base_url('/assets/');?>js/cam.js"></script>
	
</head>
<body>

	<!------------------------------------------------------------------------------------------------- .navbar -->
	<div class="navbar-fixed">
		<nav class="asu">
			<div class="header-sticky">
				<div class="nav-wrapper">
					<div class="container">
						<a href="#" class="brand-logo">Wahyu Daya Mulia</a>
						<a href="#" class="sidenav-trigger" data-target="mobile-nav" >
							<i class="material-icons white-text">menu</i>
						</a>
						<ul class="right hide-on-med-and-down">
							<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="<?php echo base_url();?>about">About</a></li>
							<li><a href="<?php echo base_url();?>product">Product</a></li>
							<li><a href="<?php echo base_url();?>maintance">Factory</a></li>
							<li><a href="<?php echo base_url();?>event">Event</a></li>
							<li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
							<li><a href="<?php echo base_url();?>contact">Contact</a></li>
							<li><a href="<?php echo base_url();?>login">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>

	<ul class="sidenav" id="mobile-nav">
		<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
		<li><a href="<?php echo base_url();?>about">About</a></li>
		<li><a href="<?php echo base_url();?>product">Product</a></li>
		<li><a href="<?php echo base_url();?>maintance">Factory</a></li>
		<li><a href="<?php echo base_url();?>event">Event</a></li>
		<li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
		<li><a href="<?php echo base_url();?>contact">Contact</a></li>
		<li><a href="<?php echo base_url();?>login">Login</a></li>
	</ul>

	<!------------------------------------------------------------------------------------------------- /.navbar -->