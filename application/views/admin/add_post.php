<!DOCTYPE html>
<html>
<head>
	<title>Admin- Post Wahyu Daya Mulia</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Materialize icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!-- Materialize CSS -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/');?>admin/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/');?>admin/css/materialize.min.css">
	<!-- Materialize JavaScript -->
	<script src="<?php echo base_url('/assets/');?>admin/js/materialize.js"></script>
	<script src="<?php echo base_url('/assets/');?>admin/js/materialize.min.js"></script>
	<script src="<?php echo base_url('/assets/');?>admin/js/cam.js"></script>
	

</head>
<body class="brown lighten-5">

	<!------------------------------------------------------------------------------------------------- .navbar-atas -->

	<header>
		<nav class="brown lighten-5 nav-atas">
			<div class="nav-wrapper">
				<div class="row">

					<div class="col s12">
						<a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
						<a class="right btn-floating btn-small red pulse icon-out"><i class="material-icons" style="line-height: 38px;">power_settings_new</i></a>
						<a target="_blank" class="brand-logo brown-text text-lighten-1">Add New Post</a>
					</div>

				</div>
			</div>
		</nav>
	</header>

	<!------------------------------------------------------------------------------------------------- /.navbar-atas -->
	<!------------------------------------------------------------------------------------------------- .navbar-kiri -->

	<div id="sidenav-1" class="sidenav sidenav-fixed side-jar">

		<div class="card-panel coklat ident-admin">
			<span class="white-text center"><h5>Wahyu Daya Mulia</h5></span>
		</div>

		<div class="padd-atas-nav">
			<ul class="collapsible">
				<li>
					<a href="index.html" style="height: 80px; line-height: 80px;">
						<i class="material-icons" style="line-height: 80px;">dashboard</i>
					Dasboard</a>
				</li>
				<li>
					<a href="product.html" style="height: 80px; line-height: 80px;">
						<i class="material-icons" style="line-height: 80px;">format_list_bulleted</i>
					Product</a>
				</li>
				<li>
					<a href="event.html" style="height: 80px; line-height: 80px;">
						<i class="material-icons" style="line-height: 80px;">event_note</i>
					Event</a>
				</li>
				<li class="active">
					<a href="post.html" style="height: 80px; line-height: 80px;">
						<i class="material-icons" style="line-height: 80px;">border_color</i>
					Post</a>
				</li>
				<li>
					<a href="order.html" style="height: 80px; line-height: 80px;">
						<i class="material-icons" style="line-height: 80px;">card_travel</i>
					Order</a>
				</li>
				<li>
					<a href="user.html" style="height: 80px; line-height: 80px;">
						<i class="material-icons" style="line-height: 80px;">supervisor_account</i>
					User</a>
				</li>
			</ul>
		</div>
	</div>

	<!------------------------------------------------------------------------------------------------- /.navbar-kiri -->
	<!------------------------------------------------------------------------------------------------- .konten -->

	<main>
		<br>
		<div class="row">

			<div class="row">

				<div class="col s12 m4 l2"></div>
				<!-- form action="<?php //base_url('product/do_add_product') ?>" method="post" enctype="multipart/form-data" > -->
				<form action="<?php echo base_url();?>product/do_add_product" method="post" enctype="multipart/form-data">
					<div class="col s12 m4 l8">
						<br>
						<div class="card brown lighten-5">
							<div class="card-content white-text">

								<div class="row">
									<div class="input-field col s12">
										<input name="nama" id="last_name" type="text" class="validate">
										<label for="last_name">Judul Post</label>
									</div>
								</div>

							</div>
						</div>

						<div class="card brown lighten-5">
							<div class="card-content white-text">

								<div class="row">
									<div class="input-field col s12">
										<textarea name="keterangan" id="textarea1" class="materialize-textarea"></textarea>
										<label for="textarea1">Description</label>
									</div>
								</div>

							</div>
						</div>

						<div class="card brown lighten-5">
							<div class="card-content white-text">

								<div class="row">
									<div class="col s12">
										<form action="#">
											<div class="file-field input-field">
												<div class="btn coklat">
													<span>Upload</span>
													<input type="file" id="customer_img" class="dropify" name="gambar" />
													<input name="gambar" type="file" >
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" placeholder="Upload Image Post">
												</div>
											</div>
										</form>
									</div>
								</div>

							</div>
						</div>

						<button type="submit" class="waves-effect waves-light btn-large coklat but-panjang">Publish</button>

					</div>
				</form>

				<div class="col s12 m4 l2"></div>

			</div>

		</div>
	</main>

	<!------------------------------------------------------------------------------------------------- /.konten -->

</body>
</html>