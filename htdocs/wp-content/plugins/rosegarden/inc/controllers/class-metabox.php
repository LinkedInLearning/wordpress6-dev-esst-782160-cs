<?php
/**
 * Controller for metaboxes.
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controller;

/**
 * The Controller class for metaboxes
 */
class Metabox {
	/**
	 * Set up and add the meta box.
	 */
	public static function add() {
		$screens = array( 'post', 'wporg_cpt' );
		foreach ( $screens as $screen ) {
			add_meta_box(
				'rosegarden-metabox',               // Unique ID.
				__( 'Rosegarden', 'rosegarden' ),   // Box title.
				array( self::class, 'render' ),       // Content callback, must be of type callable.
				'rosegarden'                        // Post type.
			);
		}
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
	public static function save( $post_id ) {
		$request_body = file_get_contents( 'php://input' );
		parse_str( $request_body, $param );

		if ( empty( $param['nonce'] ) || ! wp_verify_nonce( $param['nonce'], 'rosegarden-nonce' ) ) {
			return false;
		}

		if ( array_key_exists( 'rosegarden_title', $param ) ) {
			update_post_meta(
				$post_id,
				'_rosegarden',
				$param['rosegarden_title']
			);
		}
	}


}
