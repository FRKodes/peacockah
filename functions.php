<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
		'top-menu' => __( 'Menu Top' ),
		'footer-menu' => __( 'Menu Footer' )
		)
	);
}

function peacock_adding_styles() {
	wp_register_style('peacock_stylesheet', get_template_directory_uri() .'/assets/css/peacock-style.css' );
	wp_enqueue_style('peacock_stylesheet');
}
add_action( 'wp_enqueue_scripts', 'peacock_adding_styles' );


// function no_more_jquery(){
//     wp_deregister_script('jquery');
// }
// add_action('wp_enqueue_scripts', 'no_more_jquery');


wp_enqueue_script( 'popper_script', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true );

function peacock_adding_scripts() {
	wp_register_script('peacock_script', get_template_directory_uri() . '/assets/js/all.js', array('jquery'),'1.0', true);
	wp_enqueue_script('peacock_script');
}
add_action( 'wp_enqueue_scripts', 'peacock_adding_scripts' );

