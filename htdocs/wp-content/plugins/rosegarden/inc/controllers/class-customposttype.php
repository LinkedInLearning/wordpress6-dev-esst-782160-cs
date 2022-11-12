<?php
// phpcs:ignoreFile WordPress.Security.NonceVerification.Missing
/**
 * Controller for metaboxes.
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controllers;

/**
 * The Controller class for metaboxes
 */
class CustomPostType {

	/**
	 * Adds custom post type.
	 */
	public static function init() {
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


	/**
	 * Set up and add the meta box.
	 */
	public static function add_metabox() {
		add_meta_box(
			'rosegarden-metabox',               // Unique ID.
			__( 'Rosegarden', 'rosegarden' ),   // Box title.
			array( self::class, 'render' ),     // Content callback, must be of type callable.
			'rosegarden'                        // Post type.
		);
	}

	/**
	 * Display the meta box HTML to the user.
	 *
	 * @param \WP_Post $post   Post object.
	 */
	public static function render( $post ) {
		load_template(
			__DIR__ . '/../views/metabox.php',
			true,
			array(
				'value' => get_post_meta( $post->ID, '_rosegarden', true ),
			)
		);
	}

	/**
	 * Save the meta box data.
	 *
	 * @param int $post_id  The post ID.
	 */
	public static function save_metabox( $post_id ) {
		if ( empty( $_POST['rosegarden_title'] ) ) {
			return;
		}

		update_post_meta(
			$post_id,
			'_rosegarden',
			sanitize_text_field( $_POST['rosegarden_title'] )
		);
	}

}
