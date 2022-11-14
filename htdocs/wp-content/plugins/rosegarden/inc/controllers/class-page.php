<?php
/**
 * Controller for the page.
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controllers;

/**
 * The Controller class for the backend page.
 */
class Page {
	/**
	 * Adds words to the title.
	 *
	 * @param string $title Old title.
	 */
	public static function title( $title ) {
		return 'Hello: ' . $title;
	}

	/**
	 * Adds button to content.
	 *
	 * @param string $content Old content.
	 */
	public static function getinfo( $content ) {
		wp_enqueue_script( 'rosegarden', plugins_url( '../../dist/js/index.js', __FILE__ ), array(), '1.0.0', true );
		$vars = array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
		);
		wp_localize_script( 'rosegarden', 'rosegarden', $vars );

		$button = '<button id="rosegarden-get-info">Get info</button>';
		return $content . $button;
	}
}
