<?php
/**
 * The Promociones template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/page/content', 'promociones' );
						endwhile;
					endif; ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
