<?php
/**
 * Controller for shortcode.
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controllers;

/**
 * The Controller class for shortcodes
 */
class Shortcode {
	/**
	 * The hello shortcode
	 *
	 * @param array $atts The attributes within the shortcode.
	 */
	public static function hello( $atts ) {
		$atts = shortcode_atts(
			array(
				'who' => 'world',
			),
			$atts
		);

		return "Greetings to {$atts['who']}";
	}

}
