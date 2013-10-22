<?php
@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '20M');
@ini_set( 'max_execution_time', '300' );


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );


//add support for post thumbnails
add_theme_support('post-thumbnails');
if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}


//setup other image sizes
add_image_size( 'slider', 1296, 200, true );


// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'tpi' ),
) );
	
	
//fire up a sidebar if there is one
if ( function_exists('register_sidebar') )
	register_sidebars(2,array(
		'name' => 'Sidebar %d',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4 class="sidebar-heading">',
		'after_title' => '</h4><hr class="inset" />',
));


//REPORTS
function reports_post_type() {
  $labels = array(
    'name' => _x('Reports', 'post type general name'),
    'singular_name' => _x('Report', 'post type singular name'),
    'add_new' => _x('Add New', 'report'),
    'add_new_item' => __('Add New Report'),
    'edit_item' => __('Edit Report'),
    'new_item' => __('New Report'),
    'all_items' => __('All Reports'),
    'view_item' => __('View Report'),
    'search_items' => __('Search Reports'),
    'not_found' =>  __('No reports found'),
    'not_found_in_trash' => __('No reports found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Reports'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => false,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  ); 
  register_post_type('pas_reports',$args);
}
add_action( 'init', 'reports_post_type' );



// Reports Years
add_action( 'init', 'create_book_taxonomies', 0 );

function create_book_taxonomies() 
{
  $labels = array(
    'name' => _x( 'Year', 'taxonomy general name' ),
    'singular_name' => _x( 'Year', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Years' ),
    'all_items' => __( 'All Years' ),
    'parent_item' => __( 'Parent Years' ),
    'parent_item_colon' => __( 'Parent Year:' ),
    'edit_item' => __( 'Edit Years' ), 
    'update_item' => __( 'Update Year' ),
    'add_new_item' => __( 'Add New Year' ),
    'new_item_name' => __( 'New Year Name' ),
    'menu_name' => __( 'Years' ),
  ); 	

  register_taxonomy('reports_years',array('pas_reports'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => false
  ));
}


// Change Post label to News
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add News';
	$submenu['edit.php'][16][0] = 'News Tags';
	echo '';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


// Reorder Admin Menu
function custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
		'index.php', // Dashboard
		'edit.php', // News
		'edit.php?post_type=pas_media', //Media Releases
		'edit.php?post_type=pas_reports', //Reports
		'edit.php?post_type=page', // Pages
		'separator1',
		'upload.php', // Media
		'link-manager.php', // Links
		'edit-comments.php', // Comments
		'themes.php', // Appearance
		'plugins.php', // Plugins
		'users.php', // Users
		'tools.php', // Tools
		'options-general.php', // Settings
		'separator2'

	);
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');


// Remove the <p> tag from images
function filter_ptags_on_images($content)
{
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


//Direct Focus in the Admin Footer
function modify_footer_admin () {
  echo 'Created by <a href="http://www.directfocus.com" target="_blank">Direct Focus</a>. Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a>';
}
add_filter('admin_footer_text', 'modify_footer_admin');


//Allow SVG uploads
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

?>