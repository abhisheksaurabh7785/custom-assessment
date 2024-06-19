<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://xyz.com
 * @since      1.0.0
 *
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Abhishek_Tripathi
 * @subpackage Abhishek_Tripathi/public
 * @author     Abhishek Tripathi <abhisheksaurabh78663@gmail.com>
 */
class Abhishek_Tripathi_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/abhishek-tripathi-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/abhishek-tripathi-public.js', array( 'jquery' ), $this->version, false );

	}

	// Filter to modify menu arguments
	public function abhi_theme_modify_menu_args( $args ) {
		// Check if it's the front page and not the blog posts index
		if ( is_page('jaipur') ) {
			// Display primary menu on homepage
			$args['theme_location'] = 'jaipur-menu';
		} else {
			$args['theme_location'] = 'primary';
			// Display Jaipur menu on other pages
		}

		return $args;
	}
	
	// Add dropdown button to primary menu
	public function abhi_theme_add_dropdown_to_menu( $items, $args ) {
		// Check if it's the primary menu
		if ( $args->theme_location == 'primary' ) {
			// Add a dropdown button as the last menu item
			$dropdown_button = '<li class="menu-item dropdown">
									<a href="#1" class="dropdown-toggle" data-toggle="dropdown">Cities</a>
									<ul class="dropdown-menu">
										<li><a href="jaipur">Jaipur</a></li>
										<li><a href="#3">Noida</a></li>
									</ul>
								</li>';
			
			// Append the dropdown button to the menu items
			$items .= $dropdown_button;
		}
		return $items;
	}

}
