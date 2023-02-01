<?php

require_once get_template_directory() . '/includes/helpers.php';
require_once get_template_directory() . '/includes/optimizer.php';
require_once get_template_directory() . '/includes/pagination.php';
require_once get_template_directory() . '/includes/custom_post_faqs.php';

function verve_setup() {
	load_theme_textdomain( 'verve', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'blog', 565, 373, true );

	register_nav_menus( array(
		'header'	=> __( 'Header Menu', 'verve' ),
	));
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'verve_setup' );

function verve_url() { 
	return get_bloginfo('url'); 
}
add_filter('login_headerurl', 'verve_url');

function verve_scripts() {
	wp_enqueue_script( 'verve-bundle-runtime', get_template_directory_uri() . '/main.js', array(), '1', true );

}
add_action( 'wp_enqueue_scripts', 'verve_scripts' );

function verve_footer_styles() {
  wp_enqueue_style( 'verve-style', get_template_directory_uri(). '/style.css' );
};
add_action( 'get_footer', 'verve_footer_styles' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Geral',
		'menu_title'	=> 'Geral',
		'menu_slug' 	=> 'general',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' 		=> 'dashicons-editor-kitchensink',
		'position' 		=> 25
	));
}

add_filter('show_admin_bar', '__return_false');

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) {
	foreach( $items as &$item ) {
		$icon = get_field('icon', $item);
		
		if( $icon ) {
			$item->title = ' <i class="fa '.$icon.'"></i>' . $item->title;
		}
	}
	return $items;
}

add_filter( 'wp_title', 'verve_filter_wp_title', 10, 2 );

function verve_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	$title .= get_bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'verve' ), max( $paged, $page ) );

	return $title;
}

function verve_add_image_responsive_class($content) {
  global $post;
  
  $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
  $replacement = '<img$1class="$2 img-fluid"$3>';
  $content = preg_replace($pattern, $replacement, $content);
  
  return $content;
}
add_filter('the_content', 'verve_add_image_responsive_class');

function verve_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'verve_custom_excerpt_length', 999 );