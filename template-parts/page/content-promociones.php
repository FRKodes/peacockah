<?php
/**
 * Template part for displaying the page content in page-promociones.php
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
			<div class="row">
				<div class="col-xs-12">
					<?php the_post_thumbnail(); ?>
				</div>

				<div class="col-xs-12 promos-container">
					<?php $args = array( 'post_type' => 'promocion', 'posts_per_page' => 15 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
						<div class="item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
							<?php the_post_thumbnail(); ?>
						</div><?php
					endwhile;
					wp_reset_query();?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
