<?php

add_action('init', 'verve_cases');

function verve_cases() { 
	$labels = array(
		'name' => _x('Cases', 'post type general name'),
		'singular_name' => _x('Cases', 'post type singular name'),
		'add_new' => _x('New case', 'New case'),
		'add_new_item' => __('New case'),
		'edit_item' => __('Edit case'),
		'new_item' => __('New case'),
		'view_item' => __('View case'),
		'search_items' => __('Search case'),
		'not_found' =>  __('Any cases found'),
		'not_found_in_trash' => __('Any cases found in trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Cases'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,      
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cases' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-tide',
		'menu_position' => 10,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'thumbnail')
			);

	register_post_type( 'cases' , $args );
	flush_rewrite_rules();
}