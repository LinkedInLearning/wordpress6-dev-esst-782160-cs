<?php
/**
 * Rosegarden21 Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rosegarden21
 */

add_action( 'wp_enqueue_scripts', 'twentytwentyone_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentytwentyone_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentytwentyone-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'rosegarden21-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'twentytwentyone-style' ]
	);
}
