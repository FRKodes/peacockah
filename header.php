<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400,400i,700,900" rel="stylesheet">
<meta name="description" content="Somos una empresa con presencia internacional, desarrollamos productos biológicos y farmacéuticos especializados con la mejor calidad del mercado para el cuidado de la salud animal, dirigido a grandes explotaciones ganaderas, animales de traspatio y animales de compañía.">
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-18"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-84802922-18');
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<div class="navigation-top">
			<div class="wrap">
				<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
			</div><!-- .wrap -->
		</div><!-- .navigation-top -->	

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
