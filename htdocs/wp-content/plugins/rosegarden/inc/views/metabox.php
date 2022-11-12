<?php
// phpcs:ignoreFile WordPress.WP.I18n
/**
 * Templatefile for metabox
 *
 * @package Rosegarden
 */

?>

<label>
	<input type="hidden" name="nonce" value="<?php esc_attr_e( wp_create_nonce( 'rosegarden-nonce' ) ); ?>">

	<?php esc_html_e( 'Rosegarden', 'rosegarden' ); ?>: 
	<input type="text" name="rosegarden_title" value="<?php esc_attr_e( $args['value'] ); ?>">
</label>
