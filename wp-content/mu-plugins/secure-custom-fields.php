<?php
/**
 * Plugin Name: Secure Custom Fields
 * Description: Secure Custom Fields.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//ACF to JSON
function acf_json( $paths ) {
	$paths[] = WP_CONTENT_DIR . '/mu-plugins/secure-custom-fields/acf-json';
	return $paths;
}
add_filter( 'acf/settings/load_json', 'acf_json' );


// Load Secure Custom Fields
require_once WP_CONTENT_DIR . '/mu-plugins/secure-custom-fields/acf.php';