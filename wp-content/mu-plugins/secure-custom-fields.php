<?php
/**
 * Plugin Name: Secure Custom Fields
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SCF_ALLOW_LOCAL_JSON', true );

// Save JSON to theme
add_filter( 'acf/settings/save_json', function () {
	return get_template_directory() . '/acf-json';
} );

// Load JSON from theme
add_filter( 'acf/settings/load_json', function ( $paths ) {

	// Remove default
	unset( $paths[0] );

	// Add theme JSON
	$paths[] = get_template_directory() . '/acf-json';

	return $paths;
} );

// Load Secure Custom Fields
require_once WP_CONTENT_DIR . '/mu-plugins/secure-custom-fields/acf.php';

add_action( 'acf/init', function () {
	error_log( 'SCF JSON: ' . ( defined( 'SCF_ALLOW_LOCAL_JSON' ) ? 'ENABLED' : 'DISABLED' ) );
	error_log( print_r( acf_get_setting( 'save_json' ), true ) );
} );