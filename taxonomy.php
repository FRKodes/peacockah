<?php
/**
 * The template for displaying taxonomy pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header container">
			<div class="row">
				<?php the_archive_title( '<h1 class="page-title col-xs-12 col-sm-12">', '</h1>' ); ?>
			</div>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="container">
			
			<div class="row">
				
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/product/content', 'mini' );
					endwhile;
				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif; ?>
				
			</div>
			<div class="row">
				<?php 
				the_posts_pagination( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page' ) . '</span>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
				) );
				?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
