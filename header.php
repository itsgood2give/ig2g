<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ig2g
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ig2g' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

			<a class="nonblock nontext" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="ipt_logo block" src="<?php bloginfo('template_directory'); ?>/images/ig2g%20logo.png" alt="" width="94" height="79">
			</a>

			<!-- ipaterso ig2g -->
			<div class="ipt_topbar">
					<div class="ipt_smallwhitetext">
				 	<p>The Ripple Retreat is due for completion in 2015. Thank-you all for your support £750,063 raised so far, 75% of the total we need!</p>
					</div>
				
			</div>

<!--

			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
-->


		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'ig2g' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
