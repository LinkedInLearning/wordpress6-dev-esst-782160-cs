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
class Settings {
	/**
	 * Holds the values to be used in the fields callbacks
	 *
	 * @var object
	 */
	private $options;

	/**
	 * Start up
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_settings_page' ) );
		add_action( 'admin_init', array( $this, 'init' ) );
	}

	/**
	 * Registers assets and initializes page.
	 */
	public function add_settings_page() {
		add_menu_page(
			'Rosengarten',
			'Rosengarten',
			'manage_options',
			'rosegarden',
			array( $this, 'render' ),
			'dashicons-admin-site',
			10
		);
	}

	/**
	 * Render the page in the backend.
	 */
	public function render() {
		$this->options = get_option( 'rosegarden_option_name' );

		load_template(
			__DIR__ . '/../views/settings.php',
			true,
			array(
				'a' => array( 1, 2, 3 ),
			)
		);
	}

	/**
	 * Registers and adds settings.
	 */
	public function init() {
		register_setting(
			'rosegarden_option_group', // Option group.
			'rosegarden_option_name', // Option name.
			array( $this, 'sanitize' ) // Sanitize.
		);

		add_settings_section(
			'rosegarden_setting_section_id', // ID.
			'Rosegarden', // Title.
			array( $this, 'print_section_info' ), // Callback.
			'rosegarden-setting-admin' // Page.
		);
		add_settings_field(
			'title',
			'Title',
			array( $this, 'title_callback' ),
			'rosegarden-setting-admin',
			'rosegarden_setting_section_id'
		);
	}

	/**
	 * Sanitize earosegarden setting field as needed
	 *
	 * @param array $input Contains all settings fields as array keys.
	 */
	public function sanitize( $input ) {
		$new_input = array();
		if ( isset( $input['title'] ) ) {
			$new_input['title'] = sanitize_text_field( $input['title'] );
		}

		return $new_input;
	}

	/**
	 * Print the Section text
	 */
	public function print_section_info() {
		print 'Enter your settings below:';
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function title_callback() {
		printf(
			'<input type="text" id="title" name="rosegarden_option_name[title]" value="%s" />',
			isset( $this->options['title'] ) ? esc_attr( $this->options['title'] ) : ''
		);
	}
}
