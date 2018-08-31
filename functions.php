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
		'top-menu' 				=> __( 'Menu Top' ),
		'footer-menu-left' 		=> __( 'Menu Footer Left' ),
		'footer-menu-center-01'	=> __( 'Menu Footer Center 1' ),
		'footer-menu-center-02'	=> __( 'Menu Footer Center 2' ),
		'footer-menu-right' 	=> __( 'Menu Footer Right' )
		)
	);
}

function peacock_adding_styles() {
	wp_register_style('peacock_stylesheet', get_template_directory_uri() .'/assets/css/peacock-style.css', array(), '1.6' );
	wp_enqueue_style('peacock_stylesheet');
}
add_action( 'wp_enqueue_scripts', 'peacock_adding_styles' );

wp_enqueue_script( 'popper_script', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true );

function peacock_adding_scripts() {
	wp_register_script('peacock_script', get_template_directory_uri() . '/assets/js/all.js', array('jquery'),'1.3', true);
	wp_enqueue_script('peacock_script');
}
add_action( 'wp_enqueue_scripts', 'peacock_adding_scripts' );

add_theme_support( 'post-thumbnails' );

function create_banner_post_type() {
  register_post_type( 'banner',
	array(
	  'labels' => array(
		'name' => __( 'Banners' ),
		'singular_name' => __( 'Banner' ),
		'menu_name'				=> __( 'Banner'),
		'all_items'				=> __( 'Todos los banners'),
		'view_item'				=> __( 'Ver Banner'),
		'add_new_item'			=> __( 'Agregar nuevo banner'),
		'add_new'				=> __( 'Agregar nuevo'),
		'edit_item'				=> __( 'Editar banner'),
		'update_item'			=> __( 'Actualizar Banner'),
		'search_items'			=> __( 'Buscar banner'),
		'not_found'				=> __( 'Banner no encontrado'),
		'not_found_in_trash'	=> __( 'Banner no encontrado en la papelera')
	  ),
	  'public' => true,
	  'has_archive' => true,
	  'supports' => array('title', 'editor', 'thumbnail'),
	)
  );
}
add_action( 'init', 'create_banner_post_type' );











function create_promocion_post_type() {
  register_post_type( 'promocion',
	array(
	  'labels' => array(
		'name' => __( 'Promociones' ),
		'singular_name' => __( 'Promoción' ),
		'menu_name'				=> __( 'Promociones'),
		'all_items'				=> __( 'Todos las promociones'),
		'view_item'				=> __( 'Ver promoción'),
		'add_new_item'			=> __( 'Agregar nuevo promoción'),
		'add_new'				=> __( 'Agregar nuevo'),
		'edit_item'				=> __( 'Editar Promoción'),
		'update_item'			=> __( 'Actualizar Promoción'),
		'search_items'			=> __( 'Buscar Promoción'),
		'not_found'				=> __( 'Promoción no encontrada'),
		'not_found_in_trash'	=> __( 'Promoción no encontrada en la papelera')
	  ),
	  'public' => true,
	  'has_archive' => true,
	  'supports' => array('title', 'editor', 'thumbnail'),
	)
  );
}
add_action( 'init', 'create_promocion_post_type' );















function create_product_post_type() {

	register_post_type( 'producto',
		array(
		'labels' => array(
			'name' 					=> __( 'Productos' ),
			'singular_name'			=> __( 'Producto' ),
			'menu_name'				=> __( 'Productos'),
			'all_items'				=> __( 'Todos los productos'),
			'view_item'				=> __( 'Ver producto'),
			'add_new_item'			=> __( 'Agregar nuevo producto'),
			'add_new'				=> __( 'Agregar nuevo'),
			'edit_item'				=> __( 'Editar producto'),
			'update_item'			=> __( 'Actualizar producto'),
			'search_items'			=> __( 'Buscar producto'),
			'not_found'				=> __( 'Producto no encontrado'),
			'not_found_in_trash'	=> __( 'Producto no encontrado en la papelera')
		),
		'public' 				=> true,
		'has_archive' 			=> true,
		'supports' 				=> array('title', 'editor', 'thumbnail')
		)
  );

}
add_action( 'init', 'create_product_post_type' );


add_action( 'init', 'create_product_tax' );

function create_product_tax() {
	register_taxonomy(
		'product_category',
		'producto',
		array(
			'label' => __( 'Categoría de Producto' ),
			'rewrite' => array( 'slug' => 'categoria-producto' ),
			'hierarchical' => true,
		)
	);
}

add_action( 'init', 'create_product_tax_uso' );

function create_product_tax_uso() {
	register_taxonomy(
		'product_category_use',
		'producto',
		array(
			'label' => __( 'Categoría de Uso' ),
			'rewrite' => array( 'slug' => 'uso' ),
			'hierarchical' => true,
		)
	);
}

