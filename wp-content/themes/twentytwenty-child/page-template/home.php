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
					<h3><?=the_field('business_title');?></h3>
					<div><?=the_field('business_description');?></div>
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
						<h2 class="section-title"><?=the_field('fetatures_title');?></h2>
						<div class="desc-text">
							<div><?=the_field('fetatures_description');?></div>
						</div>
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
								<i class="<?=the_sub_field('icon');?>"></i>
							</div>
							<div class="feature-info float-left">
								<h4><?=the_sub_field('single_fetature_title');?></h4>
								<div><?=the_sub_field('single_fetature_description');?></div>
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

<?php get_footer(); ?>
