<!DOCTYPE html>

<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
	
	<title><?php if (is_front_page()) {
	echo bloginfo('name');
	} elseif (is_page()) {
	echo wp_title(); echo ' | '; echo bloginfo('name');
	} elseif (is_single()) {
	echo wp_title(); echo ' | '; echo bloginfo('name');
	} elseif (is_404()) {
	echo '404 Not Found'; echo ' | '; echo bloginfo('name');
	} elseif (is_category()) {
	echo 'Category:'; wp_title(); echo ' | '; echo bloginfo('name');
	} elseif (is_search()) {
	echo 'Search Results'; echo ' | '; echo bloginfo('name');
	} elseif ( is_day() || is_month() || is_year() ) {
	echo 'Archives:'; wp_title(); echo ' | '; echo bloginfo('name');
	} else {
	echo wp_title(); echo ' | '; echo bloginfo('name');
	}
	?></title>
	
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="" >
	<meta name="description" content="" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js' , array( 'jquery' )); ?>
	<?php wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js' , array( 'jquery' ) , false, true); ?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" type="image/x-icon" />
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrap">

	<div class="main">
	
		<nav class="nav-main" role="navigation">
	            
			<?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary' ) ); ?>
	            
		</nav>