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

/*
 * BANNERS PRINCIPALES
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
							<div class="col-xs-12 col-sm-6 <?php if(get_field('alineacion_texto')){ echo "ml-auto " .  get_field('alineacion_texto'); } ?>">
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
						<div class="col-xs-12 col-md-5 col-lg-6 about-us-photo-home" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
						<div class="col-xs-12 col-md-7 col-lg-6 text-container"><?php the_content(); ?></div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row"><?php 
				$terms = get_terms( 'product_category_use' );
				$terms_ = get_terms( 'product_category' );?>
				<div class="col-xs-12 col-sm-12"><h2 class="entry-title text-center azul mayus">Productos</h2></div>
				<div class="products-selector-container col-sm-10 col-sm-offset-1 hidden-sm hidden-md hidden-lg hidden-xl">
					<select name="products-selector" id=""><?php
						if ( count( $terms ) > 0 ) {
							foreach ( $terms as $term ) {?> 
								<option value="<?php if($_SERVER['HTTP_HOST'] !== 'peacock.test'){ echo '/demo'; } ?>/uso/<?php echo $term->slug ?>"><?php echo $term->name ?></option><?php
							}
						}
						if ( count( $terms_ ) > 0 ) {
							foreach ( $terms_ as $term_ ) {?> 
								<option value="<?php if($_SERVER['HTTP_HOST'] !== 'peacock.test'){ echo '/demo'; } ?>/categoria-producto/<?php echo $term_->slug ?>"><?php echo $term_->name ?></option><?php 
							}
						}?>
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<ul class="product_category_use_list"><?php 
						if ( count( $terms ) > 0 ) {
							foreach ( $terms as $term ) {?> <li class="mayus"><a href="<?php if($_SERVER['HTTP_HOST'] !== 'peacock.test'){ echo '/demo'; } ?>/uso/<?php echo $term->slug ?>"><?php echo $term->name ?></a></li><?php }
						}
						if ( count( $terms_ ) > 0 ) {
							foreach ( $terms_ as $term_ ) {?> <li class="mayus"><a href="<?php if($_SERVER['HTTP_HOST'] !== 'peacock.test'){ echo '/demo'; } ?>/categoria-producto/<?php echo $term_->slug ?>"><?php echo $term_->name ?></a></li><?php }
						}?>
					</ul>
				</div>
			</div>

			<div class="row">
				<?php $args = array( 'post_type' => 'producto', 'posts_per_page' => 12);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					if (get_field('show_at_home') == 1) {
						get_template_part( 'template-parts/product/content', 'mini' );
					}
				endwhile;
				wp_reset_query();?>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<h2 class="entry-title text-center azul mayus">Encuentra nuestros productos</h2>
				</div>
			</div>

			<div class="row back-white m-b-40">
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