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
						よくあるご質問&nbsp;&nbsp;|&nbsp;&nbsp;お問い合わせ
					</p>
				</div>
			</div>
			<div class="header-logo">
				<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/DBE_logo2.png" />
			</div>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<ul class="nav-menu">
						<li class="page_item ">
							<a href="#">
								<span class="page_item_news">
									
								</span>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/features_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/curriculum_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/student_life_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/accommodation_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/how_to_play_menu.png"/>
							</a>
						</li>
					</ul>
					<ul class="nav-menu">
						<li class="page_item ">
							<a href="">
								<img class="page_item_news" src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/news_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/features_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/curriculum_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/student_life_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/accommodation_menu.png"/>
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/how_to_play_menu.png"/>
							</a>
						</li>
					</ul>
					<script type="text/javascript">
						/* jQuery('.page_item_news').hover(function(){
							jQuery(this).attr('src','http://wordpress-orientation.localhost/wordpress_orientation/wp-content/uploads/2014/03/news_menu_hover.png');
						}); */
					</script>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
