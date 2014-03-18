<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
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
	<?php wp_head(); ?>
	<script type="text/javascript">
		document.createElement('header');
		document.createElement('nav');
		document.createElement('menu');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
			<div class="top-content">
				<div class="top-content-text">
					<p class="left">
						初級者から上級者までレベルに合わせた学習プログラム
					</p>
					<p class="right">
						<a href="#">よくあるご質問</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">お問い合わせ</a>
					</p>
				</div>
			</div>
			<div class="header-logo">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>-child/images/header_and_footer/DBE_logo.png" alt="Dream Big English Logo"/>
				</a>
			</div>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<div class="page_item_news left <?php echo ($_SERVER['REQUEST_URI'] == '/news/' ? 'current' : '');?>" onclick="location.href='http://wordpress-orientation.localhost/?p=58';"></div>
					<div class="page_item_features left <?php echo ($_SERVER['REQUEST_URI'] == '/features/' ? 'current' : '');?>" onclick="location.href='#';"></div>
					<div class="page_item_curriculum left <?php echo ($_SERVER['REQUEST_URI'] == '/curriculum/' ? 'current' : '');?>" onclick="location.href='#';"></div>
					<div class="page_item_student_life left <?php echo ($_SERVER['REQUEST_URI'] == '/student-life/' ? 'current' : '');?>" onclick="location.href='http://wordpress-orientation.localhost/?p=60';"></div>
					<div class="page_item_accomodation left <?php echo ($_SERVER['REQUEST_URI'] == '/accommodation/' ? 'current' : '');?>" onclick="location.href='http://wordpress-orientation.localhost/?p=4';"></div>
					<div class="page_item_apply left <?php echo ($_SERVER['REQUEST_URI'] == '/apply/' ? 'current' : '');?>" onclick="location.href='#';"></div>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
