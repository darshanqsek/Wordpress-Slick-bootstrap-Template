<?php /* Template Name: Home Page */ 

get_header();
?>

<!-- Services Section Start -->
<section id="services" class="section">
	<div class="container">

		<div class="row">
			<?php if( have_rows('services') ): ?>
				<?php  while( have_rows('services') ) : the_row(); ?>
					<!-- Start Col -->
					<div class="col-lg-4 col-md-6 col-xs-12">
						<div class="services-item text-center">
							<?php if($icon = get_sub_field('icon')){ ?>
								<div class="icon">
									<i class="<?=$icon?>"></i>
								</div>
							<?php } ?>
							<?php if($service_title = get_sub_field('service_title')){ ?>
								<h4><?=$service_title?></h4>
							<?php } ?>
							<?php if($service_desc = get_sub_field('service_description')){ ?>
								<p><?=$service_desc?></p>
							<?php } ?>
						</div>
					</div>
					<!-- End Col -->
				<?php endwhile; ?>
			<?php else: ?>
				<p class="text-center">Not Found Services</p>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- Services Section End -->


<!-- Business Plan Section Start -->
<section id="business-plan">
	<div class="container">

		<div class="row">
			<!-- Start Col -->
			<div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
				<div class="business-item-img">
					<?php 
					$business_image = get_field('business_image');
					if($business_image != ""){
						?>
						<img src="<?=$business_image['url'];?>" class="img-fluid" alt="<?=$business_image['alt'];?>">
					<?php } ?>
				</div>
			</div>
			<!-- End Col -->
			<!-- Start Col -->
			<div class="col-lg-6 col-md-12 pl-4">
				<div class="business-item-info">
					<?php if($business_title = get_field('business_title')){ ?>
						<h3><?=$business_title?></h3>
					<?php } ?>
					<?php if($business_description = get_field('business_description')){ ?>
						<div><?=$business_description?></div>
					<?php } ?>
					<?php $button = get_field('button');  ?>
					<?php if($button != ""){ ?>
						<a class="btn btn-common" href="<?=$button['url']?>" target="<?=$button['target'];?>"><?=$button['title'];?></a>
					<?php } ?>
				</div>
			</div>
			<!-- End Col -->

		</div>
	</div>
</section>
<!-- Business Plan Section End -->


<!-- Cool Fetatures Section Start -->
<section id="features" class="section">
	<div class="container">
		<!-- Start Row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="features-text section-header text-center">  
					<div>
						<?php if($fetatures_title = get_field('fetatures_title')){ ?>
							<h2 class="section-title"><?=$fetatures_title?></h2>
						<?php } ?>
						<?php if($fetatures_desc = get_field('fetatures_description')){ ?>
							<div class="desc-text">
								<div><?=$fetatures_desc?></div>
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>

		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row featured-bg">

			<?php if( have_rows('fetatures') ): ?>
				<?php  while( have_rows('fetatures') ) : the_row(); ?>
					<!-- Start Col -->
					<div class="col-lg-6 col-md-6 col-xs-12 p-0">
						<!-- Start Fetatures -->
						<div class="feature-item featured-border1">
							<div class="feature-icon float-left">
								<?php if($icon = get_sub_field('icon')){ ?>
									<i class="<?=$icon?>"></i>
								<?php } ?>
							</div>
							<div class="feature-info float-left">
								<?php if($single_fetature_title = get_sub_field('single_fetature_title')){ ?>
									<h4><?=$single_fetature_title?></h4>
								<?php } ?>
								<?php if($single_fetature_desc = get_sub_field('single_fetature_description')){ ?>
									<div><?=$single_fetature_desc?></div>
								<?php } ?>
							</div>
						</div>
						<!-- End Fetatures -->
					</div>
					<!-- End Col -->
				<?php endwhile; ?>
			<?php else: ?>
				<p class="text-center">Fetatures Not Found</p>
			<?php endif; ?>
		</div>
		<!-- End Row -->
	</div>
</section>
<!-- Cool Fetatures Section End --> 

<!-- Recent Showcase Section Start -->
<section id="showcase">
	<div class="container-fluid right-position">
		<!-- Start Row -->
		<div class="row gradient-bg">
			<div class="col-lg-12">
				<div class="showcase-text section-header text-center">  
					<div>
						<?php if($showcase_title = get_field('showcase_title')){ ?>
							<h2 class="section-title"><?=$showcase_title?></h2>
						<?php } ?>
						<?php if($showcase_desc = get_field('showcase_description')){ ?>
							<div class="desc-text">
								<?=$showcase_desc?>
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>

		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row justify-content-center showcase-area">
			<div class="col-lg-12 col-md-12 col-xs-12 pr-0">
				<div class="showcase-slider owl-carousel">
					<?php if( have_rows('showcase_slider') ): ?>
						<?php  while( have_rows('showcase_slider') ) : the_row(); ?>
							<div class="item">
								<div class="screenshot-thumb">
									<?php
									$slider_image = get_sub_field('slider_image');
									if($slider_image != ""){
										?>
										<img src="<?=$slider_image['url'];?>" class="img-fluid" alt="<?=$slider_image['alt'];?>" />
									<?php } ?>
									<div class="hover-content text-center">
										<div class="fancy-table">
											<div class="table-cell">
												<div class="single-text">
													<?php if($slider_tags = get_sub_field('slider_tags')){ ?>
														<p><?=$slider_tags?></p>
													<?php } ?>
													<?php if($slider_title = get_sub_field('slider_title')){ ?>
														<h5><?=$slider_title?></h5>
													<?php } ?>
												</div>
												<div class="zoom-icon">
													<?php
													$slider_image = get_sub_field('slider_image');
													if($slider_image != ""){
														?>
														<a class="lightbox" href="<?=$slider_image['url'];?>"><i class="lni-zoom-in"></i></a>
													<?php } ?>
													<?php if($slider_link = get_sub_field('slider_link')){ ?>
														<a href="<?=$slider_link['url'];?>"><i class="lni-link"></i></a>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End Row -->
	</div>
</section>
<!-- Recent Showcase Section End --> 


<!-- Our Pricing Plan Section Start -->
<section id="pricing" class="section">
	<div class="container">
		<!-- Start Row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="pricing-text section-header text-center">  
					<div>
						<?php if($pricing_title = get_field('pricing_title')){ ?>
							<h2 class="section-title"><?=$pricing_title?></h2>
						<?php } ?>
						<?php if($pricing_desc = get_field('pricing_description')){ ?>
							<div class="desc-text">
								<?=$pricing_desc?>s
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>

		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row pricing-tables">
			<!--  Start Col -->
			<?php if( have_rows('pricings') ): ?>
				<?php  while( have_rows('pricings') ) : the_row(); ?>
					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="pricing-table text-center">
							<div class="pricing-details">
								<?php if($plan_title = get_sub_field('plan_title')){ ?>
									<h3><?=$plan_title?></h3>
								<?php } ?>
								<?php if($price = get_sub_field('price')){ ?>
									<h1><span>$</span><?=$price?></h1>
								<?php } ?>
								<div><?=the_sub_field('pricing_details');?></div>
							</div>
							<div class="plan-button">
								<?php if($plan_button = get_sub_field('plan_button')){ ?>
									<a href="<?=$plan_button?>" class="btn btn-border">Purchase</a>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<!--  End Col -->
		</div>
		<!-- End Row -->
	</div>
</section>
<!-- Our Pricing Plan Section End --> 

<!-- Client Testimoninals Section Start -->

<section id="testimonial" class="section" <?php if($background_image = get_field('background_image')){ ?> style="background: url('<?=$background_image['url'];?>') no-repeat center center;" <?php } ?>>
	<div class="container right-position">
		<!-- Start Row -->
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="video-promo-content text-center">
					<?php
					if($video_url = get_field('video_url')){
						?>
						<a id="play-video" class="video-play-button video-popup" href="<?=$video_url?>">
							<span></span>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row justify-content-center testimonial-area">
			<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-20 pl-20" style="overflow: hidden;padding-bottom: 60px">
				<div id="client-testimonial" class="text-center owl-carousel">
					<?php if( have_rows('testimonial_item') ): ?>
						<?php  while( have_rows('testimonial_item') ) : the_row(); ?>
							<div class="item">
								<div class="testimonial-item">
									<div class="content-inner">
										<?php if($description = get_sub_field('description')){ ?>
											<p class="description"><?=$description?></p>
										<?php } ?>
										<div class="author-info">
											<h5><?= the_sub_field('customer_name').';';?>  <span><?=the_sub_field('customer_service');?></span></h5>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End Row -->
	</div>
</section>
<!-- Client Testimoninals Section End --> 


<!-- Team section Start -->
<section id="team" class="section">
	<div class="container">
		<!-- Start Row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="team-text section-header text-center">  
					<div> 
						<?php if($team_title = get_field('team_title')){ ?>
							<h2 class="section-title"><?=$team_title?></h2>
						<?php } ?>
						<?php if($team_desc = get_field('team_description')){ ?>
							<div class="desc-text">
								<?=$team_desc?>
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>

		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row">
			<!-- Start Col -->
			<?php if( have_rows('teams') ): ?>
				<?php  while( have_rows('teams') ) : the_row(); ?>
					<div class="col-lg-3 col-md-6 col-xs-12">
						<div class="single-team">
							<?php
							$team_image = get_sub_field('team_image');
							if($team_image != ""){
								?>
								<div class="team-thumb">
									<img src="<?=$team_image['url'];?>" class="img-fluid" alt="<?=$team_image['alt'];?>">
								</div>
							<?php } ?>
							<div class="team-details">
								<?php if( have_rows('social_list') ) :?>
									<div class="team-social-icons">
										<ul class="social-list">
											<?php while( have_rows('social_list') ) : the_row(); ?>
												<li><a href="<?=the_sub_field('social_link');?>"><i class="<?=the_sub_field('social_icon');?>"></i></a></li>
											<?php endwhile; ?>
										</ul>
									</div>
								<?php endif; ?>
								<div class="team-inner text-center">
									<?php if($team_title = get_sub_field('team_title')){ ?>
										<h5 class="team-title"><?=$team_title?></h5>
									<?php } ?>
									<?php if($team_job = get_sub_field('team_job')){ ?>
										<p><?=$team_job?></p>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- Start Col -->
		</div>
		<!-- End Row -->
	</div>
</section>
<!-- Team section End -->


<!-- Blog Section -->
<section id="blog" class="section">
	<!-- Container Starts -->
	<div class="container">
		<!-- Start Row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="blog-text section-header text-center">  
					<div>
						<?php if($bugs_title = get_field('bugs_section_title')){ ?>
							<h2 class="section-title"><?=$bugs_title?></h2>
						<?php } ?>
						<?php if($bugs_desc = get_field('bugs_section_description')){ ?>
							<div class="desc-text">
								<?=$bugs_desc?>
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>

		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row">
			<!-- Start Col -->
			<?php if( have_rows('bug_items') ): ?>
				<?php  while( have_rows('bug_items') ) : the_row(); ?>
					<?php $latest_post = get_sub_field('latest_post'); 
					?>
					<div class="col-lg-4 col-md-6 col-xs-12 blog-item">
						<!-- Blog Item Starts -->
						<div class="blog-item-wrapper">
							<div class="blog-item-img">
								<a href="<?=get_permalink($latest_post->ID);?>">
									<?php $img_url = wp_get_attachment_image_url(get_post_thumbnail_id($latest_post->ID), 'full'); ?>
									<?php if($img_url){ ?>
										<img src="<?=$img_url?>" class="img-fluid" alt="">
									<?php } ?>
								</a>             
							</div>
							<div class="blog-item-text"> 
								<h3><a href="<?=get_permalink($latest_post->ID);?>"><?=$latest_post->post_title?></a></h3>
								<p><?=$latest_post->post_content?></p>
								<a href="" class="read-more">5 Min read</a>
							</div>
							<div class="author">
								<?php
								$author_name = get_the_author_meta( 'display_name', $latest_post->post_author);
								if($author_name){
									?>
									<span class="name"><i class="lni-user"></i><a href="#">Posted by <?=$author_name?></a></span>
								<?php } ?>
								<span class="date float-right"><i class="lni-calendar"></i><a href="#"><?=date('d F, Y',strtotime($latest_post->post_date))?></a></span>
							</div>
						</div>
						<!-- Blog Item Wrapper Ends-->
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- End Col -->

		</div>
		<!-- End Row -->
	</div>
</section>
<!-- blog Section End -->


<!-- Contact Us Section -->
<section id="contact" class="section">
	<!-- Container Starts -->
	<div class="container">
		<!-- Start Row -->
		<div class="row">
			<div class="col-lg-12">
				<div class="contact-text section-header text-center">  
					<div>   
						<?php if($contact_title = get_field('contact_title')){ ?>
							<h2 class="section-title"><?=$contact_title?></h2>
						<?php } ?>
						<?php if($contact_desc = get_field('contact_description')){ ?>
							<div class="desc-text">
								<?=$contact_desc?>
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>

		</div>
		<!-- End Row -->
		<!-- Start Row -->
		<div class="row">
			<!-- Start Col -->
			<div class="col-lg-6 col-md-12" id="contactForm">
				<?=do_shortcode('[contact-form-7 id="183" title="Contact form"]');?>  
			</div>
			<!-- End Col -->
			<!-- Start Col -->
			<div class="col-lg-1">

			</div>
			<!-- End Col -->
			<!-- Start Col -->
			<div class="col-lg-4 col-md-12">
				<?php
				$contact_image = get_field('contact_image');
				if($contact_image){
					?>
					<div class="contact-img">
						<img src="<?=$contact_image['url'];?>" class="img-fluid" alt="">
					</div>
				<?php } ?>
			</div>
			<!-- End Col -->
			<!-- Start Col -->
			<div class="col-lg-1">
			</div>
			<!-- End Col -->

		</div>
		<!-- End Row -->
	</div>
</section>
<!-- Contact Us Section End -->


<?php get_footer(); ?>
