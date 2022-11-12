<?php
/**
 * Controller for i18n (translation)
 *
 * @package Rosegarden
 */

namespace Rosegarden\Controllers;

/**
 * The Controller class  i18n (translation)
 */
class Translation {
	/**
	 * Inits the plugin translation.
	 */
	public static function load_textdomain() {
		$r = load_plugin_textdomain(
			'rosegarden',
			false,
			basename( realpath( __DIR__ . '/../..' ) ) . '/languages'
		);

	}


}
