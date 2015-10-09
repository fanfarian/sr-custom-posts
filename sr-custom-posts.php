<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://stefan-reichert.com/koepfe/stefan-reichert
 * @since             1.0.0
 * @package           sr_custom_posts
 *
 * @wordpress-plugin
 * Plugin Name:       Theme Custom Posts
 * Plugin URI:        https://github.com/fanfarian/sr-custom-posts
 * Description:       Your custom posts and taxonomies as plugin in your Wordpress-Theme
 * Version:           1.1.0
 * Author:            Stefan Reichert
 * Author URI:        http://stefan-reichert.com/koepfe/stefan-reichert
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sr-custom-posts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sr-custom-posts-activator.php
 */
function activate_sr_custom_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sr-custom-posts-activator.php';
	sr_custom_posts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sr-custom-posts-deactivator.php
 */
function deactivate_sr_custom_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sr-custom-posts-deactivator.php';
	sr_custom_posts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sr_custom_posts' );
register_deactivation_hook( __FILE__, 'deactivate_sr_custom_posts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sr-custom-posts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sr_custom_posts() {

	$plugin = new sr_custom_posts();
	$plugin->run();

}
run_sr_custom_posts();
