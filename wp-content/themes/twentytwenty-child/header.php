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
					<a href="" class="navbar-brand">
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
							<h2 class="head-title"><?=the_field('head_title',55);?></h2>
							<p><?=the_field('head_paragraph',55);?></p>
							<?php if( have_rows('button',55) ){ ?>
								<div class="header-button">
									<?php  while( have_rows('button',55) ) { the_row(); ?>
									<a href="<?=the_sub_field('button_url',55)['url'];?>" class="<?=the_sub_field('button_class',55);?>"><?=the_sub_field('button_name',55);?></a>
								<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-xs-12 p-0">
						<?php  
						$image = get_field('intro_image');
						if( !empty( $image ) ){
							?>
							<div class="intro-img">
								<img src="<?=esc_url($image['url']);?>" alt="<?=esc_attr($image['alt']);?>">
							</div>            
						<?php } ?>
					</div>
				</div> 
			</div>           
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
