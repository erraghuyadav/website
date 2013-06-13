<?php ?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<?php if (is_search()) echo '<meta name="robots" content="noindex, nofollow" />'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Andy Orvis" />
	<meta name="google-site-verification" content="" />
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<!-- CSS & Icons -->
    <link href='//fonts.googleapis.com/css?family=Oswald:300,700,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/_/fancybox/jquery.fancybox-1.3.4.css" /> 
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/_/img/favicon.png" />
    <link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/_/img/apple-touch-icon.png" />
	
	<!-- Modernizr -->
	<script src="<?php bloginfo( 'template_directory' ); ?>/_/js/modernizr.custom.93990.js"></script>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

		<header id="header" role="header">
			<div class="wrapper">
				<h1><a class="logo-main" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/_/img/logo-main.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a><a class="logo-mobile" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/_/img/markhill-logo-mobile.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="104"></a></h1>
				<nav id="nav" role="navigation">
					<?php wp_nav_menu( array('menu' => 'primary') ); ?>
				</nav>
                
                <ul class="social">
                	<li><a href="https://twitter.com/#!/markhillhair" class="twitter">Mark Hill on Twitter</a></li>
                	<li><a href="http://www.facebook.com/Markhillhair" class="facebook">Mark Hill on Facebook</a></li>
                	<li><a href="http://www.youtube.com/MarkHillHair" class="youtube">Mark Hill on Youtube</a></li>
                </ul>    
                <a href="" id="menu-button"></a>           
            </div>
		</header>