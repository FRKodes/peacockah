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

					<form action="/sendmail-contact" method="post" id="contactForm">
						<div class="form-group"><input type="text" name="nombre" class="form-control" required="true" data-validate="required" placeholder="Nombre*"></div>
						<div class="form-group"><input type="text" name="telefono" class="form-control" required="true" data-validate="required" placeholder="Teléfono*"></div>
						<div class="form-group"><input type="text" name="email" class="form-control" required="true" data-validate="required|email" placeholder="Correo*"></div>
						<div class="form-group"><input type="text" name="mensaje" class="form-control" placeholder="Escríbenos tu mensaje"></div>
						<div class="form-group"><input type="submit" class="btn btn-primary black-btn pull-right" value="Enviar"></div>
						<div class="sent_mail_alert text-center">¡GRACIAS! <br>tu mensaje se ha enviado exitosamente, nos pondremos en contacto contigo a la brevedad.</div>
					</form>
				</div>
			</div>

		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
