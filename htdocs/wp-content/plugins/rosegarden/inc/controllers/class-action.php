<?php
/**
 * Controller for the AJAX actions.
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controllers;

/**
 * The Controller class for AJAX actions.
 */
class Action {
	/**
	 * Adds words to the title.
	 *
	 * @param string $title Old title.
	 */
	public function get_info( $title ) {

		$count = get_transient( 'rosegarden' );
		if ( false === $count ) {
			$count = 1;
		} else {
			$count++;
		}

		set_transient( 'rosegarden', $count );
		$data = array(
			'a'         => 1,
			'b'         => 2,
			'data'      => $_POST['data'], //phpcs:ignore
			'transient' => $count,
		);

		wp_send_json( $data, 200, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	}


}
