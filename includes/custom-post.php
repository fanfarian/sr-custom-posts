<?php
/**
 * Custom Post Template
 * Please replace POST_[1] with your own post type names
 *
 * @since       1.0.0
 * @created		03.08.2015
 * @author      Stefan Reichert <stefan@stefan-reichert.com>
 */


class srcp_custom_posts_Posts {

    /**
     * Register Post Type 1
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
	public function register_custom_post_POST_1() {
	    $labels = array(
			'name'                => _x( 'Post 1', 'Post Type General Name' ),
			'singular_name'       => _x( 'Post 1', 'Post Type Singular Name' ),
			'menu_name'           => __( 'Post 1' ),
			'name_admin_bar'      => __( 'Post 1' ),
			'parent_item_colon'   => __( 'Parent Post 1:' ),
			'all_items'           => __( 'All Post 1' ),
			'add_new_item'        => __( 'Add New Post 1' ),
			'add_new'             => __( 'Add New' ),
			'new_item'            => __( 'New Post 1' ),
			'edit_item'           => __( 'Edit Post 1' ),
			'update_item'         => __( 'Update Post 1' ),
			'view_item'           => __( 'View Post 1' ),
			'search_items'        => __( 'Search Post 1' ),
			'not_found'           => __( 'Not found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
	    );
		$args = array(
			'label'               	=> __( 'Post 1' ),
			'description'        	=> __( 'Post 1 Description' ),			
			'labels'              	=> $labels,
			'public'       		  	=> true,																													// Available for all
			'exclude_from_search'	=> false,
			'publicly_queryable'  	=> true,
			'show_ui'             	=> true,
			'show_in_nav_menus' 	=> false,
			'show_in_menu'        	=> true,
			'show_in_admin_bar'   	=> true,
			'menu_position' 		=> 20,																														// Position in admin menu
			'menu_icon' 		  	=> 'dashicons-exerpt-view',																									// https://developer.wordpress.org/resource/dashicons
			'capability_type'     	=> 'page',																													// Page or Post
			'hierarchical' 			=> false,																													// No hierachical posts
			'supports'           	=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),	
	//		'taxonomies' 			=> array('TAX_1','TAX_2'),																									// Custom or default taxonomies
			'has_archive'  			=> true,																													// With archive page
	        'rewrite'       		=> array( 'slug' => 'POST_1', 'with_front' => false),
			'query_var' 			=> true,
			'can_export'          	=> true,
	    );
	    register_post_type( 'POST_1', $args );	
	}
	
    /**
     * Register Post Type 2
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
	public function register_custom_post_POST_2() {
	    $labels = array(
			'name'                => _x( 'Post 2', 'Post Type General Name' ),
			'singular_name'       => _x( 'Post 2', 'Post Type Singular Name' ),
			'menu_name'           => __( 'Post 2' ),
			'name_admin_bar'      => __( 'Post 2' ),
			'parent_item_colon'   => __( 'Parent Post 2:' ),
			'all_items'           => __( 'All Post 2' ),
			'add_new_item'        => __( 'Add New Post 2' ),
			'add_new'             => __( 'Add New' ),
			'new_item'            => __( 'New Post 2' ),
			'edit_item'           => __( 'Edit Post 2' ),
			'update_item'         => __( 'Update Post 2' ),
			'view_item'           => __( 'View Post 2' ),
			'search_items'        => __( 'Search Post 2' ),
			'not_found'           => __( 'Not found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
	    );
		$args = array(
			'label'               	=> __( 'Post 2' ),
			'description'        	=> __( 'Post 2 Description' ),			
			'labels'              	=> $labels,
			'public'       		  	=> true,																													// Available for all
			'exclude_from_search'	=> false,
			'publicly_queryable'  	=> true,
			'show_ui'             	=> true,
			'show_in_nav_menus' 	=> false,
			'show_in_menu'        	=> true,
			'show_in_admin_bar'   	=> true,
			'menu_position' 		=> 20,																														// Position in admin menu
			'menu_icon' 		  	=> 'dashicons-exerpt-view',																									// https://developer.wordpress.org/resource/dashicons
			'capability_type'     	=> 'page',																													// Page or Post
			'hierarchical' 			=> false,																													// No hierachical posts
			'supports'           	=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),	
	//		'taxonomies' 			=> array('TAX_1','TAX_2'),																									// Custom or default taxonomies
			'has_archive'  			=> true,																													// With archive page
	        'rewrite'       		=> array( 'slug' => 'POST_2', 'with_front' => false),
			'query_var' 			=> true,
			'can_export'          	=> true,
	    );
	    register_post_type( 'POST_2', $args );	
	}
}


    /**
     * Custom columns for custom posts in administration overview
     * Customize functions and uncomment add_filter
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
	function srcp_POST_1_columns($columns) {
		unset($columns['date']);																																// Unset date column for later modification
		
		$new_columns = array(
			'custom_column' => 'Custom Name',																													// Custom column
			'date' 			=> __('Date', 'srcp'),																												// Date column
		);
	    return array_merge($columns, $new_columns);																												// Return columns modified array
	}
	// add_filter('manage_POST_1_posts_columns' , 'srcp_POST_1_columns');																						// Add custom columns to overview
	
	
	function srcp_custom_columns($col, $id) {
	   switch($col) {
	
		case 'custom_column':
			// Insert custom output for this column
		break;
	
	   }
	}
	//add_action('manage_posts_custom_column' , 'srcp_custom_columns', 10, 2 );																					// get custom columns from database

?>