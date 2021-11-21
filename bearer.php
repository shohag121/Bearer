<?php
/**
 * Bearer
 *
 * @package           Bearer
 * @author            Bearer
 * @copyright         2021 WPDevICU
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Bearer
 * Plugin URI:        https://wpdev.icu/bearer/
 * Description:       Description of the plugin.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            WPDevICU
 * Author URI:        https://wpdev.icu
 * Text Domain:       bearer
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://wordpress.org/plugins/bearer/
 */

/*
Bearer is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Bearer is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Bearer. If not, see http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

if ( ! defined( 'BEARER_PLUGIN_FILE' ) ) {
	define( 'BEARER_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'BEARER_PLUGIN_DIR' ) ) {
	define( 'BEARER_PLUGIN_DIR', __DIR__ );
}

if ( ! file_exists( BEARER_PLUGIN_DIR . '/vendor/autoload.php' ) ) {
	return;
}

require_once BEARER_PLUGIN_DIR . '/vendor/autoload.php';

if ( ! function_exists( 'bearer' ) ) {

	/**
	 * Helper class for Bearer.
	 *
	 * @since 1.0.0
	 *
	 * @return \WPDevICU\Bearer\Bearer
	 */
	function bearer(): \WPDevICU\Bearer\Bearer {
		return \WPDevICU\Bearer\Bearer::init();
	}
}
bearer();
