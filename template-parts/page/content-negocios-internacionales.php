<?php
/**
 * Template part for displaying Negocios Internacionales page content in page-negocios-internacionales.php
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
				<div class="col-xs-12">
					<p class="text-center">
						<?php the_post_thumbnail(); ?>
					</p>
				</div>
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
				<div class="col-xs-12">
					<img class="img-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/mapa_distribucion_peacock.jpg" alt="mapa de distribución peacock animal health">
				</div>
				
				<div class="col-xs-12 col-sm-12 text-center">
					<h2 class="m-b-40 m-t-40">SE UN DISTRIBUIDOR DE PEACOCK® ANIMAL HEALTH</h2>
					
				</div>

				<div class="col-xs-12 col-sm-8 col-lg-6 ml-auto mr-auto">

					<p>Si estás interesado en distribuir los productos de PEACOCK® Animal Health, llena este formulario y nos pondremos en contacto contigo a la brevedad.</p>
					
					<form action="/sendmail-contact" method="post" id="contactForm">
						<div class="form-group"><input name="nombre" type="text" class="form-control" required="required" placeholder="Nombre*"></div>
						<div class="form-group"><input name="email" type="text" class="form-control" required="required" placeholder="Correo electrónico*"></div>
						<div class="form-group"><input name="telefono" type="text" class="form-control" required="required" placeholder="Teléfono*"></div>
						<div class="form-group"><textarea name="mensaje" id="mensaje" class="form-control" placeholder="Comentarios" cols="30" rows="10"></textarea></div>
						<div class="form-group"><input value="Enviar" type="submit" class="btn btn-primary black-btn"></div>
						<div class="sent_mail_alert text-center">¡GRACIAS! <br>tu mensaje se ha enviado exitosamente, nos pondremos en contacto contigo a la brevedad.</div>
					</form>
				</div>

			</div>

		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
