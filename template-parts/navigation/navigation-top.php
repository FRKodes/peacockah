<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Peacock_animal_health
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation navbar navbar-expand-md fixed-top" role="navigation" aria-label="">
	<a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/peacock-logo.png" alt="Logo Peacock animal health"></a>
	<button class="menu-toggle navbar-toggler" aria-expanded="false" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</button>
	<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_id' => 'top-menu') ); ?>
</nav><!-- #site-navigation -->