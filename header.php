<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> sesection and everything up till <div id="content">
 *
 * @package Clear Content
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-linfk screen-reader-text" href="#content"><?php _e( 'Skip to content', 'clear-content' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<?php do_action( 'jetpack_site_logo' ); ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
 		 <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'clear-content' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php get_search_form( true ); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
