<?php
/**
 * My first plugin.
 *
 * @package My_First_Plugin
 */

/*
Plugin Name: My First Plugin
Description: My first plugin.
Version: 1.0.0
Author: Thomas Rose
*/

add_filter( 'the_title', 'my_plugin_change_title' );

/**
 * Change title of every post and page, etc.
 *
 * @param [type] $title Original title.
 */
function my_plugin_change_title( $title ) {
	return 'Hallo: ' . $title;
}
