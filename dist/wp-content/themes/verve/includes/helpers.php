<?php

function helper_fallback_thumbnail( $image_name ) {
	if( has_post_thumbnail() ) {
		return the_post_thumbnail_url();
	} else {
		echo get_template_directory_uri().'/assets/images/'.$image_name;
	}
}