<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till main content
 *
 * @package culture2015
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://paulmederos.s3.amazonaws.com/culturecamp2015/favicon.png" rel="shortcut icon">

	<!-- TypeKit Fonts -->
  <script src="//use.typekit.net/sdi3elb.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

  <!-- jQuery -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<!-- Wordpress -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
		<a href="/" class="logo"></a>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- /.site-header -->

