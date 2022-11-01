<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medisite
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define('MEDISITE_VERSION', wp_get_theme()->get('Version'));

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		get_stylesheet() . '-style',
		get_template_directory_uri() . '/root.css',
		false,
	);
});

add_action('enqueue_block_editor_assets', function () {
	wp_enqueue_style(
		get_stylesheet() . '-style-admin',
		get_template_directory_uri() . '/root.css',
		false,
	);
}, 1);

