<?php

add_action('init', 'verve_faqs');

function verve_faqs() { 
	$labels = array(
		'name' => _x('Perguntas Frequentes', 'post type general name'),
		'singular_name' => _x('FAQs', 'post type singular name'),
		'add_new' => _x('New question', 'New question'),
		'add_new_item' => __('New question'),
		'edit_item' => __('Edit question'),
		'new_item' => __('New question'),
		'view_item' => __('View question'),
		'search_items' => __('Search question'),
		'not_found' =>  __('Any questions found'),
		'not_found_in_trash' => __('Any questions found in trash'),
		'parent_item_colon' => '',
		'menu_name' => 'FAQs'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,      
		'query_var' => true,
		'rewrite' => array( 'slug' => 'perguntas-frequentes' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_icon' => 'dashicons-editor-help',
		'menu_position' => 10,
		'show_in_rest' => true,
		'supports' => array('title', 'editor')
			);

	register_post_type( 'faqs' , $args );
	flush_rewrite_rules();
}