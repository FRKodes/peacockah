<?php
/**
 * Template part for displaying products
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.2
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<header class="entry-header col-xs-12 col-sm-5 col-md-5">
				<div class="product-image"><img src="<?php the_field('detail_image') ?>" alt="<?php the_title() ?>"></div>
			</header>
			<div class="entry-content col-xs-12 col-sm-7 col-md-7">
				<?php the_title( '<h1 class="entry-title bold">', '</h1>' ); ?>
				<p class="mayus sustancia"><?php the_field('sustancia'); ?></p><?php 
				$terms = get_the_terms($post->ID, 'product_category_use');
				foreach ($terms as $term) {?>
				    <div class="category mayus italic <?php echo $term->slug; ?>">
						<a class="<?php echo $term->slug;?>" href="<?php if($_SERVER['HTTP_HOST'] !== 'peacock.test'){ echo '/demo'; } ?>/uso/<?php echo $term->slug;?>"><?php echo $term->name;?></a>
					</div>
					<div class="icons">
						<?php
						$categories = get_the_terms( $post->ID, 'product_category');
						foreach ($categories as $category) {?>
							<span class="icon-<?php echo strtolower($category->name); ?>"></span><?php
						}
						?>
					</div><?php
				}
				the_content(); ?>
			</div><!-- .entry-content -->
		</div>
	</div>
</article><!-- #post-## -->