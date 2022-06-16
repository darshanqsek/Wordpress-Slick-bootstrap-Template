<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer>
	<!-- Footer Area Start -->
	<section id="footer-Content">
		<div class="container">
			<!-- Start Row -->
			<div class="row">

				<!-- Start Col -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="footer-logo">
						<?php dynamic_sidebar( 'custom-footer-1' ); ?>
						<!-- <img src="img/footer-logo.png" alt=""> -->
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<?php dynamic_sidebar( 'custom-footer-2' ); ?>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<?php dynamic_sidebar( 'custom-footer-3' ); ?>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<?php dynamic_sidebar( 'custom-footer-4' ); ?>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
				<!-- End Col -->
			</div>
			<!-- End Row -->
		</div>
		<!-- Copyright Start  -->

		<div class="copyright">
			<div class="container">
				<!-- Star Row -->
				<div class="row">
					<div class="col-md-12">
						<div class="site-info text-center">
							<p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
						</div>              

					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</div>
		<!-- Copyright End -->
	</section>
	<!-- Footer area End -->


</footer><!-- #site-footer -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
	<i class="lni-chevron-up"></i>
</a> 

<!-- Preloader -->
<div id="preloader">
	<div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->
<?php wp_footer(); ?>

</body>
</html>
