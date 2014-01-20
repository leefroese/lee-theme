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
	
	<script>
	//KEEP IF USING GRUNTICON
	window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
	grunticon( [ "[YOUR PATH HERE]/icons.data.svg.css", "[YOUR PATH HERE]/icons.data.png.css", "[YOUR PATH HERE]/icons.fallback.css" ] );</script>
	<noscript><link href="[YOUR PATH HERE]/icons.fallback.css" rel="stylesheet"></noscript>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="wrap">

	<div class="main">
	
		<nav class="nav-main" role="navigation">
	            
			<?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary' ) ); ?>
	            
		</nav>