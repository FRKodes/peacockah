<?php
/**
 * Template part for displaying HOME page content in page-home.php
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
	<header class="entry-header">
		<div class="main-banners-container">
			<?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="title"><?php the_title();?></p>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div><?php
			endwhile;
			wp_reset_query();
			?>
		</div>
	</header><!-- .entry-header -->
	

	<div class="entry-content">
		<div class="container-fluid back-white">
			<div class="row">
				<div class="container">
					<div class="row about-us-block">
						<div class="col-xs-12 col-md-5 col-lg-6 about-us-photo-home" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
						</div>
						<div class="col-xs-12 col-md-7 col-lg-6 text-container">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h2 class="entry-title text-center azul mayus">Productos</h2>
				</div>

				<div class="products-selector-container col-sm-10 col-sm-offset-1 hidden-sm hidden-md hidden-lg hidden-xl">
					<select name="products-selector" id="">
						<option value="bacteriologicos">Bacteriológicos</option>
						<option value="virologicos">Virológicos</option>
						<option value="desparasitantes">Desparasitantes</option>
					</select>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12">
				<ul class="product_category_use_list"><?php 
					$terms = get_terms( 'product_category_use' );
					if ( count( $terms ) > 0 ) {
						foreach ( $terms as $term ) {?> <li class="mayus"><a href="/<?php echo $term->slug ?>"><?php echo $term->name ?></a></li><?php }
					}
					$terms_ = get_terms( 'product_category' );
					if ( count( $terms_ ) > 0 ) {
						foreach ( $terms_ as $term_ ) {?> <li class="mayus"><a href="/<?php echo $term_->slug ?>"><?php echo $term_->name ?></a></li><?php }
					}?>
				</ul>
			</div>

			<div class="row">
				<?php $args = array( 'post_type' => 'producto', 'posts_per_page' => 6 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="product-container col-xs-12 col-sm-6 col-md-4">
						<div class="inner-container">
							<div class="photo"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
							<div class="info">
								<div class="title text-center mayus"><a class="black" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="text-center mayus active-substance"><?php (get_field('sustancia')) ? the_field('sustancia') : '&nbsp;' ?></div><?php 
								$terms = get_the_terms($post->ID, 'product_category_use');
								foreach ($terms as $term) {?>
									<div class="category mayus text-center italic <?php echo $term->slug; ?>">
										<?php echo $term->name;?>
									</div><?php
								}

								?>
							</div>
						</div>
					</div><?php
				endwhile;
				wp_reset_query();?>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h2 class="entry-title text-center azul mayus">Encuentra nuestros productos</h2>
				</div>
			</div>

			<div class="row back-white">
				<div class="col-xs-12 col-md-5 col-lg-5 col-xl-6 text-center">
					<img class="productos-pah" src="<?php echo get_template_directory_uri();?>/assets/images/productos-peacock-home.png" alt="productos Peacock Animal Health">
				</div>
				<div class="col-xs-12 col-md-7 col-lg-7 col-xl-6">
					<p>Somos una empresa con presencia en México y Estados Unidos, desarrollamos productos especializados para el cuidado de ganado y animales domésticos con la mejor calidad en el mercado. </p>
					<p>Envíanos un correo a <a title="Enviar correo a Peacock Animal Health" href="mailto:ventas@peacockanimalhealth.com">ventas@peacockanimalhealth.com</a> para solicitar información acerca de nuestros productos y como convertirte en distribuidor de Peacock Animal Health.</p>
					<p><a href="">ENCUENTRA PRODUCTOS PEACOCK</a></p>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
