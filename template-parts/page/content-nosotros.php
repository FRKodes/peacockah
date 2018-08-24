<?php
/**
 * Template part for displaying Nosotros page content in page-nosotros.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"><?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?></header><!-- .entry-header -->
	<div class="entry-content">
		<div class="container">
			
			<div class="row back-white-nop m-b-40">
				<div class="col-xs-12 col-md-6 col-lg-4"><figure class="m-b-0 m-l--15 img-100"><?php the_post_thumbnail(); ?></figure></div>
				<div class="col-xs-12 col-md-6 col-lg-8 p-t-20"><?php the_content(); ?></div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-5 col-lg-4 ml-auto text-center"><figure class="m-b-0 m-r--15"><img class="img-100" src="<?php the_field('imagen_auxiliar'); ?>" alt="<?php the_field('texto_extra'); ?>"></figure></div>
			</div>

			<div class="row back-white-nop m-b-40 m-t--287">
				<div class="col-xs-12 col-md-7 col-lg-8"><?php the_field('texto_extra'); ?></div>
			</div>

		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
