=== Theme Custom Posts ===
Contributors: Stefan Reichert
Tags: theme functionality, custom post, custom taxonomy, custom post plugin, custom taxonomy plugin
Requires at least: 3.6.0
Tested up to: 4.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Template for your custom posts and taxonomies as plugin in your WordPress-Theme

== Description ==
This is a *template for custom posts and taxonomies* packed as plugin for your WordPress-Theme.
This makes your custom posts and taxonomies independend from your theme, as recommended in the WordPress guidelines.
You have to edit the files mentioned below to create and manage the custom posts and taxonomies.
This plugin has *no* update functions as it will otherwise overwrite your custom stuff.

= Edit Files =

1. /includes/custom-post.php
	* Edit all POST_{x} text elements in $labels and $args and replace it with your terms
	* Edit the public function 'register_custom_post_POST_1()' and replace POST_{x} with your custom post name
	* Edit 'register_post_type( 'POST_1', $args );' and replace POST_{x} with your custom post name
2. /includes/custom-taxonomy.php
	* Edit all TAX_{x} text elements in $labels and $args and replace it with your terms
	* Edit the public function 'register_taxonomy_TAX_1()' and replace TAX_{x} with your custom taxonomy name
	* Edit 'register_taxonomy( 'POST_1_TAX_1', 'POST_1', $args );' and replace POST_{x} and TAX_{x} with your custom post name and taxonomy
3. /includes/class-sr-custom-posts.php
	* Scroll down to the 'private function define_custom_posts()', comment out one or more '$this->loader->add_action' parts and edit 'register_custom_post_POST_1' to reflect your changes made in 1.
    * Scroll down to the 'private function define_custom_taxonomies()', comment out one or more '$this->loader->add_action' parts and edit 'register_taxonomy_TAX_1' to reflect your changes made in 2.
4. Install as normal plugin and test the custom posts and taxonomies


= Website =
https://github.com/fanfarian/sr-custom-posts

== Installation ==
This section describes how to install the plugin and get it working.

1. Upload 'sr-custom-posts' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Let the magic happen...

== Frequently Asked Questions ==

= Q. I have a question =
A. Please create an issue on GitHub: https://github.com/fanfarian/sr-custom-posts/issues


== Screenshots ==


== Changelog ==

= 1.1 =
* Readme update

= 1.0 =
* First Version
* Hosted on GitHub
* Plugin Boilerplate template
