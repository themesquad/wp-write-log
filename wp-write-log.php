<?php
/**
 * Plugin Name: WP Write Log
 * Plugin URI: http://themesquad.com/
 * Description: Adds the write_log function to print in the debug.log file. Use it as a "Must Use" plugin.
 * Author: Themesquad
 * Author URI: http://themesquad.com
 * Version: 1.0.0
 * Requires at least: 3.0
 * Tested up to: 4.1.1
 *
 * Copyright: © 2015 Themesquad.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @author     Themesquad
 * @package    Write_Log
 * @since      1.0.0
 */

if ( ! function_exists( 'write_log' ) ) {
	/**
	 * Write in the log.
	 *
	 * @since 1.0.0
	 *
	 * @param mixed $log The content to log.
	 */
	function write_log( $log ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log, true ) );
			} else {
				error_log( $log );
			}
		}
	}
}