<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
			<div class="clearfix"></div>
		</div>
		<div class="about-head">
			<!--get the about page header description-->
			<!--create ACF for About Page, added one field to hold the header description-->
			<?php while ( have_posts() ) : the_post();
				$header_description =get_field('header_description');
    		$hd_first_word = explode(' ',trim($header_description)); //grab the first word in the about page header description field
				$hd_minus_first_word = strstr($header_description, $hd_first_word[1]); //grab the remaining description minus the first word
			?>
			<div class="about-head-text">
			  <!--display the about page header description-->
				<p><span class="first_word"><?php echo $hd_first_word[0];?> </span><?php echo $hd_minus_first_word; ?></p>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
	<?php wp_reset_query(); ?>
	</header><!-- #masthead -->



	<div id="main" class="site-main">
