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
<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg fixed-top" role="navigation" aria-label="">
	<div class="container">
		<div class="col-xs-12 col-sm-12 top-bar">
			<a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/peacock-logo.png" alt="Logo Peacock animal health"></a>
			<button class="menu-toggle navbar-toggler" aria-expanded="false" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_id' => 'top-menu') ); ?>
		</div>
	</div>
</nav>
<!-- #site-navigation -->