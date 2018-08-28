<?php
/**
 * Template part for displaying Nosotros page content in page-contacto.php
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
				<div class="col-xs-12 col-md-3 contact-left">
					<p>
						<b>Guadalajara</b> <br>
						Avenida de la llave #1845 <br>
						Col. Parques de Santa Cruz Del Valle, <br>
						Tlaquepaque JAL. <br>
						+52 1 33 1120 1429
					</p>
					<p>
						<b>U.S.A</b> <br>
						+1 (510) 931-0425
					</p>
					<p>Escríbenos por WhatsApp, será un placer atenderte.</p>
					<p class="text-center">
						<?php the_post_thumbnail(); ?>
					</p>
				</div>
				<div class="col-xs-12 col-md-9 ml-auto">
					
					<?php the_content(); ?>

					<p><b>Escríbenos</b></p>

					<form action="">
						<div class="form-group"><input type="text" name="" class="form-control" required="true" placeholder="Nombre*"></div>
						<div class="form-group"><input type="text" name="" class="form-control" required="true" placeholder="Teléfono*"></div>
						<div class="form-group"><input type="text" name="" class="form-control" required="true" placeholder="Correo*"></div>
						<div class="form-group"><input type="text" name="" class="form-control" placeholder="Escríbenos tu mensaje"></div>
						<div class="form-group"><input type="submit" name="" class="btn btn-primary black-btn pull-right" value="Enviar"></div>
					</form>
				</div>
			</div>

		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
