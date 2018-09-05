<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 text-center m-b-40">
						<a class="" href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/peacock-logo.png" alt="Logo Peacock animal health"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<p class="footer-title mayus text-center">Empresa</p>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-left', 'menu_id' => 'menu-footer-left') ); ?>
						<ul class="social">
							<li><a target="_blank" title="Facebook Peacock Animal Health" href="https://www.facebook.com/PeacockAH/" class="icon-fb"></a></li>
							<li><a target="_blank" title="Instagram Peacock Animal Health" href="https://www.instagram.com/peacockah/" class="icon-ig"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-md-4">
						<p class="footer-title mayus text-center">Productos por clase</p>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-center-01', 'menu_id' => 'menu-footer-center-01') ); ?>
						
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-center-02', 'menu_id' => 'menu-footer-center-02') ); ?>
					</div>
					<div class="col-xs-12 col-md-4">
						<p class="footer-title mayus text-center">Productos por especie</p>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-right', 'menu_id' => 'menu-footer-right') ); ?>
					</div>	
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<p class="text-center white m-b-0"><?php echo date('Y'); ?> PEACOCK® Animal Health. &copy; Todos los derechos reservados.</p>
						<p class="text-center white credits">Desarrollado por <a class="white" href="http://www.blueterrier.mx" target="_blank" title="Made with love at Blue Terrier Studio"><b class="spaced">Blue Terrier Studio</b></a></p>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
