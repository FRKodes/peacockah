<?php
/**
 * Template part for displaying Aviso de privacidad page content in page-aviso-de-privacidad.php
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
			
			<div class="row m-b-40">
				<div class="col-xs-12 col-md-12 p-t-20"><?php the_content(); ?></div>
			</div>

		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
