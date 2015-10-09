<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://stefan-reichert.com/koepfe/stefan-reichert
 * @since      1.0.0
 *
 * @package    sr_custom_posts
 * @subpackage sr_custom_posts/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    sr_custom_posts
 * @subpackage sr_custom_posts/includes
 * @author     Stefan Reichert <stefan@stefan-reichert.com>
 */
class sr_custom_posts {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      sr_custom_posts_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'sr-custom-posts';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_custom_posts();
		$this->define_custom_taxonomies();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - sr_custom_posts_Loader. Orchestrates the hooks of the plugin.
	 * - sr_custom_posts_i18n. Defines internationalization functionality.
	 * - sr_custom_posts_Admin. Defines all hooks for the admin area.
	 * - sr_custom_posts_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sr-custom-posts-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sr-custom-posts-i18n.php';

		/**
		 * The class responsible for custom posts 
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-post.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/custom-taxonomy.php';

		$this->loader = new sr_custom_posts_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the sr_custom_posts_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new sr_custom_posts_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}
	
	/**
	 * Register all of the hooks related to the custom posts
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_custom_posts() {

		$plugin_posts = new srcp_custom_posts_Posts();

	//	$this->loader->add_action( 'init', $plugin_posts, 'register_custom_post_POST_1' );																		// Register 1. custom post
	//	$this->loader->add_action( 'init', $plugin_posts, 'register_custom_post_POST_2' );																		// Register 2. custom post
	}
	
	/**
	 * Register all of the hooks related to the custom taxonomies
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_custom_taxonomies() {

		$plugin_taxonomy = new srcp_custom_posts_Taxonomies();

	//	$this->loader->add_action( 'init', $plugin_taxonomy, 'register_taxonomy_TAX_1' );																		// Register 1. custom taxonomy
	//	$this->loader->add_action( 'init', $plugin_taxonomy, 'register_taxonomy_TAX_2' );																		// Register 2. custom taxonomy
	}	


	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    sr_custom_posts_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
