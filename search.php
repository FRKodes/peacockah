<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<header class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 m-t-40">
					<?php if ( have_posts() ) : ?>
						<h1 class="page-title text-center mayus"><?php printf( __( 'Resultados para: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php else : ?>
						<h1 class="page-title text-center mayus"><?php _e( 'No encontramos nada :(' ); ?></h1>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">
				<div class="row">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/product/content', 'mini' );

							endwhile; // End of the loop.

							the_posts_pagination( array(
								'prev_text' => '<span class="screen-reader-text">' . __( 'Página anterior' ) . '</span>',
								'next_text' => '<span class="screen-reader-text">' . __( 'Siguiente página' ) . '</span>',
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Página' ) . ' </span>',
							) );

						else : ?>
							<div class="col-xs-12 col-sm-12 m-t-40">
								<p class="text-center"><?php _e( 'Lo sentimos, pero no encontramos ningún producto relacionado a los términos de búsqueda que proporcionaste.' ); ?></p>

								<p class="text-center">
									Intenta regresando al <a href="/">inicio del sitio web</a>.
								</p>

								<p class="text-center m-b-100">
									También puedes visitar nuestro <a target="_blank" title="Facebook de Peacock Animal Health" href="https://www.facebook.com/PeacockAH/">Facebook</a> o nuestro <a target="_blank" href="https://www.instagram.com/peacockah/" title="Instagram de Peacock Animal Health">Instagram</a> y enterarte de promociones y nuevos lanzamientos de productos.
								</p>
							</div>
							<?php
								// get_search_form();
						endif;
						?>
				</div>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
