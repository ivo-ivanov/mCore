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

add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {

	include_once 'inc/updater.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'mCore',
			'api_url' => 'https://api.github.com/repos/ivo-ivanov/mCore',
			'raw_url' => 'https://raw.github.com/ivo-ivanov/mCore/master',
			'github_url' => 'https://github.com/ivo-ivanov/mCore',
			'zip_url' => 'https://github.com/ivo-ivanov/mCore/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'README.md',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}



?>
