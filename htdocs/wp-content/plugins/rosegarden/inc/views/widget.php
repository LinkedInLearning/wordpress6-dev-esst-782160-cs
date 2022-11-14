<?php
// phpcs:ignoreFile WordPress.WP.I18n
/**
 * Templatefile for metabox
 *
 * @package Rosegarden
 */

?>


<div class="widget-wrap">
  <h4 class="widgettitle">
    <?php esc_html_e( $args['title'] ); ?>
  </h4>
  <div class="textwidget">
    <?php esc_html_e( $args['text'] ); ?>
  </div>
</div>
