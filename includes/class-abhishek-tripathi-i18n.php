<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://xyz.com
 * @since      1.0.0
 *
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/includes
 * @author     Abhishek Tripathi <abhisheksaurabh78663@gmail.com>
 */
class Abhishek_Tripathi_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'abhishek-tripathi',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
