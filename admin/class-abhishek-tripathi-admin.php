<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://xyz.com
 * @since      1.0.0
 *
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/admin
 * @author     Abhishek Tripathi <abhisheksaurabh78663@gmail.com>
 */
class Abhishek_Tripathi_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Abhishek_Tripathi_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Abhishek_Tripathi_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/abhishek-tripathi-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Abhishek_Tripathi_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Abhishek_Tripathi_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/abhishek-tripathi-admin.js', array( 'jquery' ), $this->version, false );

	}

	// Register menus
	public function abhi_theme_register_menus() {
		register_nav_menus( array(
			//'primary-menu' => esc_html__( 'Primary Menu', 'theme-textdomain' ),
			'jaipur-menu'  => esc_html__( 'Jaipur Menu', 'theme-textdomain' ),
		) );
	}

}
