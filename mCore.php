<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/ivo-ivanov
 * @since             1.0.0
 * @package           Mcore
 *
 * @wordpress-plugin
 * Plugin Name:       mCore
 * Plugin URI:        https://github.com/ivo-ivanov/mCore
 * Description:       Optimization Plugin
 * Version:           1.0.0
 * Author:            Ivo Ivanov
 * Author URI:        https://github.com/ivo-ivanov
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mcore
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MCORE_VERSION', '1.0.0' );

?>
