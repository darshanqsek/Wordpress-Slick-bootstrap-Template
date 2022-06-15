<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function add_theme_scripts() {
	
	//Css
  	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '-child/assets/css/bootstrap.min.css');
  	wp_enqueue_style( 'animate', get_template_directory_uri() . '-child/assets/css/animate.css');
  	wp_enqueue_style( 'LineIcons', get_template_directory_uri() . '-child/assets/css/LineIcons.css');
  	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '-child/assets/css/owl.carousel.css');
  	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '-child/assets/css/owl.theme.css');
  	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '-child/assets/css/magnific-popup.css');
  	wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '-child/assets/css/nivo-lightbox.css');
  	wp_enqueue_style( 'main', get_template_directory_uri() . '-child/assets/css/main.css');
  	wp_enqueue_style( 'responsive', get_template_directory_uri() . '-child/assets/css/responsive.css');
  

  	//Js
  	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '-child/assets/js/jquery-min.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'popper-min', get_template_directory_uri() . '-child/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '-child/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '-child/assets/js/owl.carousel.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '-child/assets/js/jquery.nav.js', array ( 'jquery' ), 1.1, true);
  	// wp_enqueue_script( 'scrolling-nav', get_template_directory_uri() . '-child/assets/js/scrolling-nav.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'jquery-easing-min', get_template_directory_uri() . '-child/assets/js/jquery.easing.min.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '-child/assets/js/nivo-lightbox.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '-child/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
  	wp_enqueue_script( 'main', get_template_directory_uri() . '-child/assets/js/main.js', array ( 'jquery' ), 1.1, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


function my_widgets_init() {

    register_sidebar( array(
        'id'            => 'custom-footer-1',
        'name'          => 'Footer #01',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );  
    register_sidebar( array(
        'id'            => 'custom-footer-2',
        'name'          => 'Footer #02',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );  
    register_sidebar( array(
        'id'            => 'custom-footer-3',
        'name'          => 'Footer #03',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) ); 
    register_sidebar( array(
        'id'            => 'custom-footer-4',
        'name'          => 'Footer #04',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'my_widgets_init' );