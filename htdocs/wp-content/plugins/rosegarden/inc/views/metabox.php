<?php
// phpcs:ignoreFile WordPress.WP.I18n
/**
 * Templatefile for metabox
 *
 * @package Rosegarden
 */

?>

<label>
	<?php esc_html_e( 'Rosegarden', 'rosegarden' ); ?>: 
	<input type="text" name="rosegarden_title" value="<?php esc_attr_e( $args['value'] ); ?>">
</label>
