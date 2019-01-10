	<!------------------------------------------------------------------------------------------------- .header -->

	<div id="index-banner" class="parallax-container" style="height: 400px;">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row ban-mar-lain">
					<div class="col s12 m12">
						<h1 class="header center teal-text white-text"><b>Login</b></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo base_url('/assets/');?>bann.jpg" id="top" alt="Unsplashed background img 1"></div>
	</div>

	<!------------------------------------------------------------------------------------------------- /.header -->
	<!------------------------------------------------------------------------------------------------- .login -->

	<section class="brown lighten-5">
		<div class="container">
			<div class="section">	
				<div class="row">

					<div class="col s12 m4 l3"></div>

					<div class="col s12 m4 l6">
						<br>
						<br>
						<br>
						<br>
						<div class="row">

							<form class="col s12">

								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate">
										<label for="email">Email</label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="validate">
										<label for="password">Password</label>
									</div>
								</div>

								<div class="row">
									<div class="col m12">
										<p class="center"><button class="btn ijo btn-large waves-effect waves-light btn-logine" type="button" name="action">Login</button></p>
										<div class="center"><a href="<?php echo base_url();?>registration">Create account</a></div>
									</div>
								</div>

							</form>

						</div>
						<br>
						<br>
						<br>
					</div>

					<div class="col s12 m4 l3"></div>

				</div>
			</div>
		</div>
	</section>

	<!------------------------------------------------------------------------------------------------- /.login -->