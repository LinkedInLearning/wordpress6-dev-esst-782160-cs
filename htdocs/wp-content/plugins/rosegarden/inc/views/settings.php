<?php
/**
 * Templatefile for the admin view.
 *
 * @package Rosegarden
 */

?>
<div class="wrap">
	<h1 class="wp-heading-inline"><?php esc_html_e( 'Rosegarden', 'rosegarden' ); ?></h1>
	<hr class="wp-header-end">
	<div class="card">
		<p>
		<?php esc_html_e( 'Hello world', 'rosegarden' ); ?>
		</p>
	</div>
	<div class="card">
		<form method="post" action="options.php">
			<?php
				settings_fields( 'rosegarden_option_group' );
				do_settings_sections( 'rosegarden-setting-admin' );
				submit_button();
			?>
		</form>
	</div>
</div>
