<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="icon" type="image/png" sizes="16x16" href="<?php the_field('favicon', 'options') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<?php
    include get_theme_file_path( '/views/addons/preloader.php' );
    include get_theme_file_path( '/views/addons/cookies.php' );
    include get_theme_file_path( '/views/addons/message.php' );
    include get_theme_file_path( '/views/addons/whatsapp.php' );

    include get_theme_file_path( '/views/layout/header.php' );
  ?>
	<main>