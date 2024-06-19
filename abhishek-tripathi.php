<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://xyz.com
 * @since             1.0.0
 * @package           Abhishek_Tripathi
 *
 * @wordpress-plugin
 * Plugin Name:       Abhishek tripathi plugin
 * Plugin URI:        https://xyz.com
 * Description:       Car company custom plugin
 * Version:           1.0.0
 * Author:            Abhishek Tripathi
 * Author URI:        https://xyz.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       abhishek-tripathi
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
define( 'ABHISHEK_TRIPATHI_VERSION', '1.0.0' );
define('ABPU', plugin_dir_url( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-abhishek-tripathi-activator.php
 */
function activate_abhishek_tripathi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-abhishek-tripathi-activator.php';
	if ( ! current_user_can( 'activate_plugins' ) ) return;

	$page_slug = 'jaipur'; // Slug of the Post
	$new_page = array(
		'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
		'post_title'    => 'Jaipur City',	// Title of the Content
		'post_content'  => '<p>[custom_shortcode]</p>',	// Content
		'post_status'   => 'publish',			// Post Status
		'post_author'   => 1,					// Post Author ID
		'post_name'     => $page_slug			// Slug of the Post
	);
	if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
		$new_page_id = wp_insert_post($new_page);
	}

	Abhishek_Tripathi_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-abhishek-tripathi-deactivator.php
 */
function deactivate_abhishek_tripathi() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-abhishek-tripathi-deactivator.php';
	Abhishek_Tripathi_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_abhishek_tripathi' );
register_deactivation_hook( __FILE__, 'deactivate_abhishek_tripathi' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-abhishek-tripathi.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_abhishek_tripathi() {

	$plugin = new Abhishek_Tripathi();
	$plugin->run();

}
run_abhishek_tripathi();

// Define shortcode function
function custom_shortcode_function() {
	return require plugin_dir_path( __FILE__ ) . 'public/partials/abhishek-tripathi-public-display.php';
	
}

// Register shortcode
add_shortcode('custom_shortcode', 'custom_shortcode_function');



