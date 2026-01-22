<?php
/**
 * Plugin Name: Disable Gutenberg
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

// Disable Gutenberg everywhere
add_filter( 'use_block_editor_for_post', '__return_false', 1000 );
add_filter( 'use_block_editor_for_post_type', '__return_false', 1000 );

// Disable widgets block editor
add_action( 'after_setup_theme', function () {
	remove_theme_support( 'widgets-block-editor' );
}, 1000 );