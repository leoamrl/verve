<?php

/*
Template Name: About
*/

get_header();

  include get_theme_file_path( '/views/about/content.php' );
  include get_theme_file_path( '/views/about/premises.php' );
  include get_theme_file_path( '/views/about/values.php' );
  include get_theme_file_path( '/views/about/action.php' );

get_footer();