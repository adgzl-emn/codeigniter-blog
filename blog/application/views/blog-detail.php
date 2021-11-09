<?php $this->load->view('include/header'); ?>


<?php foreach ($bilgi as $bilgi){ ?>
			<!-- Content-->
			<div class="wil-content">
				
				<!-- Section -->
				<section class="awe-section">
					<div class="container">
						
						<!-- page-title -->
						<div class="container">
							<div class="row">
								<div class="col-md-6">
						<div class="page-title pb-40">
							<span class="post-detail__cat">Free stuff</span>
							<h2 class="page-title__title"> <?php echo $bilgi->blog_baslik ?> </h2>
							<div class="post-detail__meta"><span class="date">Feb 22, 2018</span><span class="author"><a href="#">by Brandon Hanson</a></span></div>
							<div class="page-title__divider"></div>
						</div><!-- End / page-title -->
								</div>

								<div class="col-md-6">
									<img class="img-responsive" width="1080" height="600" src="<?php echo base_url('uploads/'); echo $bilgi->img; ?>" alt="">
								</div>
					</div>
				</section>
				<!-- End / Section -->
				
				
				<!-- Section -->
				<section class="awe-section bg-gray">
					<div class="container">
						
						<!--  -->
						<div>
							<div class="post-detail__media"><img src="https://images.pexels.com/photos/395132/pexels-photo-395132.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb" alt=""/></div>
							<div class="post-detail__entry row">
								<div class="col-md-8">
									<?php echo $bilgi->blog_aciklama; ?>
								</div>
							</div>

						

					</div>
				</section>
				<!-- End / Section -->
				
			</div>
			<!-- End / Content-->
<?php } ?>


<?php $this->load->view('include/footer'); ?>
