<?php
/**
 * Plugin Name: Theme Settings
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

class Gaia_Templates {

	private static $templates = [];

	public static function init() {
		self::scan();

		add_filter( 'theme_page_templates', [ __CLASS__, 'register' ] );
		add_filter( 'template_include', [ __CLASS__, 'load' ] );
		add_action( 'save_post_page', [ __CLASS__, 'force_save' ], 20, 2 );
		add_filter( 'wp_get_theme', [ __CLASS__, 'inject_cache' ] );
	}

	private static function scan() {
		$base = get_template_directory() . '/pages';

		foreach ( new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator( $base )
		) as $file ) {

			if ( $file->getExtension() !== 'php' )
				continue;

			$headers = get_file_data( $file->getPathname(), [
				'name' => 'Template Name'
			] );

			if ( empty( $headers['name'] ) )
				continue;

			$relative = str_replace(
				get_template_directory() . '/',
				'',
				$file->getPathname()
			);

			self::$templates[ $relative ] = $headers['name'];
		}
	}

	public static function register( $templates ) {
		return array_merge( $templates, self::$templates );
	}

	public static function force_save( $post_id, $post ) {
		if ( isset( $_POST['page_template'] ) ) {
			update_post_meta(
				$post_id,
				'_wp_page_template',
				sanitize_text_field( $_POST['page_template'] )
			);
		}
	}

	public static function load( $template ) {
		if ( ! is_page() )
			return $template;

		$tpl = get_post_meta( get_the_ID(), '_wp_page_template', true );

		if ( isset( self::$templates[ $tpl ] ) ) {
			$file = get_template_directory() . '/' . $tpl;
			if ( file_exists( $file ) ) {
				return $file;
			}
		}

		return $template;
	}

	public static function inject_cache( $theme ) {
		$cache = $theme->get_page_templates();
		foreach ( self::$templates as $k => $v ) {
			$cache[ $k ] = $v;
		}
		$theme->cache_add( 'page_templates', $cache );
		return $theme;
	}
}

Gaia_Templates::init();

// Disblae Gutenberg
add_filter( 'use_block_editor_for_post', '__return_false', 1000 );
add_filter( 'use_block_editor_for_post_type', '__return_false', 1000 );

// Disable widgets block editor
add_action( 'after_setup_theme', function () {
	remove_theme_support( 'widgets-block-editor' );
}, 1000 );