<?php
// phpcs:ignoreFile WordPress.WP.I18n
/**
 * Templatefile for metabox
 *
 * @package Rosegarden
 */

?>

<label>
	<?php wp_nonce_field( 'update-post_' . get_the_ID() ); ?>

	<?php esc_html_e( 'Rosegarden', 'rosegarden' ); ?>: 
	<input type="text" name="rosegarden_title" value="<?php esc_attr_e( $args['value'] ); ?>">
</label>
