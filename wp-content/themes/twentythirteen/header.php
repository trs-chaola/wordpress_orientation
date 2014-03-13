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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/teacher_layout.css" />
</head>

<body <?php body_class(); ?> style="background-color: red;">
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<!-- a class="home-link" href="<?php// echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php// bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php// bloginfo( 'description' ); ?></h2>
			</a-->
			<div class="teacher_header_wrap border">
				<div class="t_lefthead_text border">
					初級者から上級者までレベルに合わせた学習プログラム
				</div>
				<div class="t_righthead_text border">
					よくあるご質問 &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; お問い合わせ			
				</div>
			</div>
			<div id="navbar" class="navbar">
				<div class="teacher_dbelogo" style="margin-left:202px; margin-bottom:21px">
					<img alt="DBE LOGO" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/DBE_logo.png" />
				</div>
				<div class="teacher_navigation border" style="margin-left:198px;">
					<ul class="t_nav_ul">
						<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/menu/menu01/news_menu.png" /></li>
						<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/menu/menu01/features_menu.png" /></li>
						<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/menu/menu01/curriculum_menu.png" /></li>
						<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/menu/menu01/student_life_menu.png" /></li>
						<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/menu/menu01/accommodation_menu.png" /></li>
						<li><img alt="" src="<?php echo get_template_directory_uri(); ?>/teacher_page/img/menu/menu01/how_to_play_menu.png" /></li>
					</ul>
				</div>
				<!-- nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?//php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?//php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php// wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php// get_search_form(); ?>
				</nav--><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
