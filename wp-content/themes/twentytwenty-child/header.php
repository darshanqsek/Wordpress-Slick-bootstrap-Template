<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Grayrids">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="home" class="hero-area">
			<div class="overlay">
				<span></span>
				<span></span>
			</div>
			<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
				<div class="container">
					<a href="index.html" class="navbar-brand">
						<!-- <img src="img/logo.png" alt=""> -->
						<?php 
						// Site title or logo.
							twentytwenty_site_logo();

						// Site description.
							twentytwenty_site_description();
						?>
					</a>    
					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>   
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<i class="lni-menu"></i>
					</button>

					<div class="collapse navbar-collapse" id="navbarCollapse">

						<ul class="navbar-nav mr-auto w-100 justify-content-end">
							<!-- <li class="nav-item">
								<a class="nav-link page-scroll" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#services">About</a>
							</li>  
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#features">Services</a>
							</li>                            
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#showcase">Showcase</a>
							</li>       
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#pricing">Pricing</a>
							</li>     
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#team">Team</a>
							</li> 
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#blog">Blog</a>
							</li>  
							<li class="nav-item">
								<a class="nav-link page-scroll" href="#contact">Contact</a>
							</li> 
							<li class="nav-item">
								<a class="btn btn-singin" href="#">Download</a>
							</li> -->
							<?php
							if ( has_nav_menu( 'primary' ) ) {

								wp_nav_menu(
									array(
										'container'  => '',

										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
										'link_class' => 'nav-link page-scroll'
									)
								);

							} elseif ( ! has_nav_menu( 'expanded' ) ) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										// 'walker'   => new TwentyTwenty_Walker_Page(),
									)
								);

							}
							?>
						</ul>
					</div>
					<?php } ?>
				</div>
			</nav>  
			<div class="container">      
				<div class="row space-100">
					<div class="col-lg-6 col-md-12 col-xs-12">
						<div class="contents">
							<h2 class="head-title">Handcrafted Web Template <br>For Business and Startups</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab <br>dolores ea fugiat nesciunt quisquam.</p>
							<div class="header-button">
								<a href="#" class="btn btn-border-filled">Get Started</a>
								<a href="#contact" class="btn btn-border page-scroll">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 p-0">
						<div class="intro-img">
							<img src="img/intro.png" alt="">
						</div>            
					</div>
				</div> 
			</div>           
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
