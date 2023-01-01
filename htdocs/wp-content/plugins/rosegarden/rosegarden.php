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


// Tanslation.
add_action( 'init', array( 'Rosegarden\Controllers\Translation', 'load_textdomain' ) );

// Custom Post Type.
add_action( 'init', array( 'Rosegarden\Controllers\CustomPostType', 'init' ) );

// Metaboxes.
add_action( 'add_meta_boxes', array( 'Rosegarden\Controllers\CustomPostType', 'add_metabox' ) );
add_action( 'save_post', array( 'Rosegarden\Controllers\CustomPostType', 'save_metabox' ) );

// Shortcodes.
add_shortcode( 'hello', array( 'Rosegarden\Controllers\Shortcode', 'hello' ) );

// Change title.
add_filter( 'the_title', array( 'Rosegarden\Controllers\Page', 'title' ) );

// Ajax actions.
add_filter( 'the_content', array( 'Rosegarden\Controllers\Page', 'getinfo' ) );
add_action( 'wp_ajax_rosegarden', array( 'Rosegarden\Controllers\Action', 'get_info' ) );
add_action( 'wp_ajax_nopriv_rosegarden', array( 'Rosegarden\Controllers\Action', 'get_info' ) );
