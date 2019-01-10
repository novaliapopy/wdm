	<!------------------------------------------------------------------------------------------------- .header -->

	<div id="index-banner" class="parallax-container" style="height: 400px;">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row ban-mar-lain">
					<div class="col s12 m12">
						<h1 class="header center teal-text white-text"><b>Product</b></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="<?php echo base_url('/assets/');?>bann.jpg" id="top" alt="Unsplashed background img 1"></div>
	</div>
	<!------------------------------------------------------------------------------------------------- /.header -->
	<!------------------------------------------------------------------------------------------------- .awal -->

	<section class="brown lighten-5">
		<div class="container">
			<div class="section">
				<div class="row">
					<div class="padd-atas"></div>
					<div class="col s12 center">
						<h4>Get Our Product</h4>
						<br>
						<p class="center sps">S4S, E4E, & E2E Solid Wood Processed wood in the form of E2E or E4E, ie processed wood products derived from S4S which is given a curved angle at 2 (two) angles (E2E) or 4 (four) angles (E4E) arch at least 3 mm (R3). Derived from merbau wood with the stipulation area not exceeding 10,000 mm2. Derived from other than merbau wood with the provision of cross-sectional area of not more than 4,000 mm2</p>
					</div>
				</div>	
			</div>
		</div>
	</section>
	
	<!------------------------------------------------------------------------------------------------- /.awal -->
	<!------------------------------------------------------------------------------------------------- .product -->

	<section class="brown lighten-5">
		<div class="container">
			<div class="section">	
				<br>
				<div class="row">
					<?php 
					foreach($product as $u){ 
						?>
						<div class="col s12 m4">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo base_url('/assets/gambar/');?><?php echo $u->gambar ?>">
								</div>
								<div class="card-content">
									<span class="card-title center"><?php echo $u->nama ?></span>
								</div>
								<div class="card-action">
									<a href="#">Readmore</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<br>

			




			<div class="row center">
				<ul class="pagination">
					<li class="active"><a href="#!"><?php 
					echo $this->pagination->create_links();
					?></a></li>
				</ul>
			</div>

			<br>
			<br>

		</div>
	</div>
</section>

	<!------------------------------------------------------------------------------------------------- /.product -->