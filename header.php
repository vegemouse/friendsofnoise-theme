<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Friends_of_Noise
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="mobile-top">
		<div class="social-links-mobile">
			<a href="https://www.facebook.com/friendsofnoise/"><img src="<?php bloginfo( 'template_url' ) ?>/assets/facebook.png" alt="Facebook"></a>
			<a href="https://twitter.com/friendsofnoise"><img src="<?php bloginfo( 'template_url' ) ?>/assets/twitter.png" alt="Twitter"></a>
			<a href="https://www.snapchat.com/add/friendsofnoise"><img src="<?php bloginfo( 'template_url' ) ?>/assets/snapchat.png" alt="Snapchat"></a>
			<a href="https://www.instagram.com/friendsofnoise/"><img src="<?php bloginfo( 'template_url' ) ?>/assets/instagram.png" alt="Instagram	"></a>
		</div>
		<span id="mobile-menu-button"><i class="fa fa-bars" aria-hidden="true"></i></span>
	</div>

<div id="page" class="site">

	<header class="site-header" role="banner">
				<a href="<?php echo home_url() ?>">

					<?php if ( !get_the_post_thumbnail_url() ) : ?>
						<img class="site-header-image" src="<?php echo get_header_image(); ?>" alt="<?php echo ( get_bloginfo( 'name ') ); ?>" />
					<?php else  : ?>
						<img class="site-header-image" src="<?php echo( get_the_post_thumbnail_url() ); ?>" alt="<?php echo ( get_bloginfo( 'name ') ); ?>" />
					<?php endif; ?>

				</a>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<!-- Mobile Menu Below -->
<div class="mobile-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'primary-menu' ) ); ?>
	<span id="mobile-menu-close">X</span>
</div>

<div class="social-links">
	<a href="https://www.facebook.com/friendsofnoise/"><img src="<?php bloginfo( 'template_url' ) ?>/assets/facebook.png" alt="Facebook"></a>
	<a href="https://twitter.com/friendsofnoise"><img src="<?php bloginfo( 'template_url' ) ?>/assets/twitter.png" alt="Twitter"></a>
	<a href="https://www.snapchat.com/add/friendsofnoise"><img src="<?php bloginfo( 'template_url' ) ?>/assets/snapchat.png" alt="Snapchat"></a>
	<a href="https://www.instagram.com/friendsofnoise/"><img src="<?php bloginfo( 'template_url' ) ?>/assets/instagram.png" alt="Instagram	"></a>
</div>

	<div id="content" class="site-content">
