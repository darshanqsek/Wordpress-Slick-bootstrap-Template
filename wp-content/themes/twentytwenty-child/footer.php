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
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
						<!-- <img src="img/footer-logo.png" alt=""> -->
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<!-- <div class="widget">
						<h3 class="block-title">Company</h3>
						<ul class="menu">
							<li><a href="#">- About Us</a></li>
							<li><a href="#">- Career</a></li>
							<li><a href="#">- Blog</a></li>
							<li><a href="#">- Press</a></li>
						</ul>
					</div> -->
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="widget">
						<h3 class="block-title">Product</h3>
						<ul class="menu">
							<li><a href="#">  - Customer Service</a></li>
							<li><a href="#">- Enterprise</a></li>
							<li><a href="#">- Price</a></li>
							<li><a href="#">- Scurity</a></li>
							<li><a href="#">- Why SLICK?</a></li>
						</ul>
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="widget">
						<h3 class="block-title">Download App</h3>
						<ul class="menu">
							<li><a href="#">  - Android App</a></li>
							<li><a href="#">- IOS App</a></li>
							<li><a href="#">- Windows App</a></li>
							<li><a href="#">- Play Store</a></li>
							<li><a href="#">- IOS Store</a></li>
						</ul>
					</div>
				</div>
				<!-- End Col -->
				<!-- Start Col -->
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
					<div class="widget">
						<h3 class="block-title">Subscribe Now</h3>
						<p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
						<div class="subscribe-area">
							<input type="email" class="form-control" placeholder="Enter Email">
							<span><i class="lni-chevron-right"></i></span>
						</div>
					</div>
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

<?php wp_footer(); ?>

</body>
</html>
