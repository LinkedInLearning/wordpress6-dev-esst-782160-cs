<?php
/**
 * Bootloader for this plugin.
 *
 * @package Rosegarden
 */

namespace Rosegarden;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Adminpage.
if ( is_admin() ) {
	new Controller\Settings();
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
add_action( 'add_meta_boxes', array( 'Rosegarden\Controller\Metabox', 'add' ) );
add_action( 'save_post', array( 'Rosegarden\Controller\Metabox', 'save' ) );


// Shortcodes.
add_shortcode( 'hello', array( 'Rosegarden\Controller\Shortcode', 'hello' ) );

/**
 * Registers widget.
 */
function widget() {
	register_widget( 'Rosegarden\Controller\Widget' );
}
add_action( 'widgets_init', __NAMESPACE__ . '\widget' );

// Change title.
add_filter( 'the_title', array( 'Rosegarden\Controller\Page', 'title' ) );

// Ajax actions.
add_filter( 'the_content', array( 'Rosegarden\Controller\Page', 'getinfo' ) );
add_action( 'wp_ajax_rosegarden', array( 'Rosegarden\Controller\Action', 'get_info' ) );
add_action( 'wp_ajax_nopriv_rosegarden', array( 'Rosegarden\Controller\Action', 'get_info' ) );
