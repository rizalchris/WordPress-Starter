<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style(
		'main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(), null, true
	);

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), null, true );

	// Swiper
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), null, true );

	// Google Fonts
	wp_enqueue_style(
		'google-fonts-preconnect',
		'https://fonts.googleapis.com',
		[],
		null
	);

	wp_enqueue_style(
		'google-fonts-preconnect-gstatic',
		'https://fonts.gstatic.com',
		[],
		null
	);

	// Enqueue Inter font
	wp_enqueue_style(
		'google-fonts-inter',
		'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap',
		[],
		null
	);

	add_filter( 'style_loader_tag', function ( $html, $handle ) {
		if ( 'google-fonts-preconnect-gstatic' === $handle ) {
			return str_replace( "rel='stylesheet'", "rel='preconnect' crossorigin", $html );
		}
		if ( 'google-fonts-preconnect' === $handle ) {
			return str_replace( "rel='stylesheet'", "rel='preconnect'", $html );
		}
		return $html;
	}, 10, 2 );

	// FontAwesome
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_assets' );