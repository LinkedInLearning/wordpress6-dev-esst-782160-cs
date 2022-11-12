<?php
/**
 * Plugin Name: Rosegarden
 * Text Domain: rosegarden
 *
 * @package Rosegarden
 */

namespace Rosegarden;

require_once __DIR__ . '/vendor/autoload.php';


// Adminpage.
if ( is_admin() ) {
	new Controllers\Settings();
}

/**
 * Inits the plugin translation.
 */
function load_textdomain() {
	$loaded = load_plugin_textdomain(
		'rosegarden',
		false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages/'
	);
}
add_action( 'init', __NAMESPACE__ . '\load_textdomain' );

/**
 * Adds custom post type.
 */
function custom_post_type() {
	register_post_type(
		'rosegarden',
		array(
			'labels'      => array(
				'name'          => __( 'Rosegarden', 'rosegarden' ),
				'singular_name' => __( 'Rosegarden', 'rosegarden' ),
			),
			'public'      => true,
			'has_archive' => true,
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\custom_post_type' );



// Metaboxes.
add_action( 'add_meta_boxes', array( 'Rosegarden\Controllers\Metabox', 'add' ) );
add_action( 'save_post', array( 'Rosegarden\Controllers\Metabox', 'save' ) );


// Shortcodes.
add_shortcode( 'hello', array( 'Rosegarden\Controllers\Shortcode', 'hello' ) );

/**
 * Registers widget.
 */
function widget() {
	register_widget( 'Rosegarden\Controllers\Widget' );
}
add_action( 'widgets_init', __NAMESPACE__ . '\widget' );

// Change title.
add_filter( 'the_title', array( 'Rosegarden\Controllers\Page', 'title' ) );

// Ajax actions.
add_filter( 'the_content', array( 'Rosegarden\Controllers\Page', 'getinfo' ) );
add_action( 'wp_ajax_rosegarden', array( 'Rosegarden\Controllers\Action', 'get_info' ) );
add_action( 'wp_ajax_nopriv_rosegarden', array( 'Rosegarden\Controllers 	\Action', 'get_info' ) );
