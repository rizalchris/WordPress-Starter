<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add_theme_support( 'woocommerce' );
// add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post', '__return_false', 100 );
add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
remove_theme_support( 'widgets-block-editor' );


register_nav_menus( [
	'primary' => 'Primary Menu',
] );

// Enqueue jQuery
function enqueue_jquery_script() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_jquery_script' );

function enqueue_assets() {
	if ( is_admin() ) {
		return;
	}

	// Main CSS
	wp_enqueue_style(
		'main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/main.css' )
	);

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), null, true );
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_assets' );
