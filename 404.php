<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<h1 class="page-title text-center m-t-40"><?php _e( '¡Oops! <br> No pudimos encontrar la página que estás buscando.', 'twentyseventeen' ); ?></h1>
							</div>
						</div>
					</div>

				</header><!-- .page-header -->
				<div class="page-content">
					<p class="text-center">
						<?php _e( 'Al parecer la página que estás buscando no existe en este sitio web. Intenta regresando a la página de inicio', 'twentyseventeen' ); ?>
					</p>

					<p class="text-center">
						<a href="/">Ir al inicio del sitio web</a>
					</p>

					<p class="text-center">
						También puedes visitar nuestro <a target="_blank" title="Facebook de Peacock Animal Health" href="https://www.facebook.com/PeacockAH/">Facebook</a> o nuestro <a target="_blank" href="https://www.instagram.com/peacockah/" title="Instagram de Peacock Animal Health">Instagram</a> y enterarte de promociones y nuevos lanzamientos de productos.
					</p>

					<p>&nbsp;</p>

					<?php //get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
