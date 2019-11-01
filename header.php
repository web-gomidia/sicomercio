<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body>
<header id="header" role="banner" data-spy="affix" data-offset-top="5">
	<div class="container">
		<div class="row">
			<div class="col-xs-9 col-md-3 col-sm-3 col-lg-3 white">
				<center><h1><?php odin_the_custom_logo(); ?><span style="visibility: hidden;"><?php bloginfo( 'name' ); ?></span></h1></center>		
			</div>	
			<div class="visible-xs col-xs-3">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>					
			</div>
			<div class="col-xs-12 col-md-9 col-sm-9 col-lg-9">
				<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
					<ul class="social pull-right">
						<li>
							<a href="https://www.facebook.com/sicomercio" target="_blank">
								<span class="fa-stack fa-lg">
								  <i class="fa fa-facebook fa-stack-1x"></i>
								</span>
							</a>
						</li>
					</ul>					
				</nav>
			</div>
		</div>
	</div>
</header>