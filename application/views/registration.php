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

	<!------------------------------------------------------------------------------------------------- .maintance -->

	<section class="brown lighten-5">
		<div class="container">
			<div class="section">

				<div class="row">
					<div class="padd-atas"></div>

					<div class="col s12 m6">
						<div class="equal-height-column parallax-container right-align">
							<h1>Registration</h1>
							<hr>
							<h3><i class="mdi-content-send brown-text"></i></h3>
							<h4 class="right-align">Wahyu Daya Mulia</h4>
							<br>
							<a href="login.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Back to Login</a>
						</div>	
					</div>

					<div class="col s12 m6">
						<div class="card brown lighten-5 add-user"">
							<div class="card-content">

								<div class="row">
									<div class="input-field col s12">
										<input id="last_name" type="text" class="validate">
										<label for="last_name">Full Name</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s6">
										<input id="email" type="email" class="validate">
										<label for="email">Email</label>
									</div>
									<div class="input-field col s6">
										<input id="email" type="email" class="validate">
										<label for="email">Phone</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="datepicker">
										<label for="text">BirtDay</label>
									</div>
									<div class="input-field col s6">
										<select>
											<option value="" disabled selected>Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
										<label for="text">Gender</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s6">
										<select>
											<option value="" disabled selected>Nationality</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
										</select>
										<label for="text">Nationality</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label for="text">Postal Code</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea1" class="materialize-textarea"></textarea>
										<label for="textarea1">Addres</label>
									</div>
								</div>

							</div>
						</div>

						<a class="waves-effect waves-light btn-large coklat but-panjang">Submit</a>

					</div>
					<div class="padd-bawah"></div>
				</div>
			</div>
		</div>
	</section>

	<!------------------------------------------------------------------------------------------------- /.maintance -->

</body>
</html>