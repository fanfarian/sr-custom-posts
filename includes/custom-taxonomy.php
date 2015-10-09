<?php
/**
 * Custom Taxonomy Template
 * Please replace TAX_[1] and POST_[1] with your own taxonomies and post type names
 *
 * @since       1.0.0
 * @created		28.04.2015
 * @author      Stefan Reichert <stefan@stefan-reichert.com>
 */


class srcp_custom_posts_Taxonomies {

    /**
     * Register Taxonomy 1
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function register_taxonomy_TAX_1() {	
	    $labels = array(
			'name'                       => _x( 'TAX 1', 'taxonomy general name' ),
			'singular_name'              => _x( 'TAX 1', 'taxonomy singular name' ),
			'menu_name'                  => __( 'TAX 1' ),			    

			'search_items'               => __( 'Search TAX 1' ),
			'popular_items'              => __( 'Popular TAX 1' ),
			'all_items'                  => __( 'All TAX 1' ),
			'view_item'					 => __( 'Show TAX 1' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit TAX 1' ),
			'update_item'                => __( 'Update TAX 1' ),
			'add_new_item'               => __( 'Add New TAX 1' ),
			'new_item_name'              => __( 'New TAX 1 Name' ),
			'separate_items_with_commas' => __( 'Separate TAX 1 with commas' ),
			'add_or_remove_items'        => __( 'Add or remove TAX 1' ),
			'choose_from_most_used'      => __( 'Choose from the most used TAX 1' ),
			'not_found'                  => __( 'No TAX 1 found.' ),
	    );
	    
	    $args = array(
	   		'label' 				=> __( 'TAX 1' ),
			'labels' 				=> $labels,
			'public'       			=> false,
			'show_ui'				=> true,
			'show_in_nav_menus' 	=> false,
			'show_tagcloud'			=> false,
			'meta_box_cb'			=> false,
			'show_admin_column' 	=> true,
			'hierarchical' 			=> false,
			'query_var' 			=> true,
	        'rewrite'       		=> false,	// array( 'slug' => 'TAX_1_SLUG', 'with_front' => false),
	    );
	    register_taxonomy( 'POST_1_TAX_1', 'POST_1', $args );
	}
	
	/**
     * Register Taxonomy 2
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function register_taxonomy_TAX_2() {	
		$labels = array(
			'name'                       => _x( 'TAX 2', 'taxonomy general name' ),
			'singular_name'              => _x( 'TAX 2', 'taxonomy singular name' ),
			'menu_name'                  => __( 'TAX 2' ),			    

			'search_items'               => __( 'Search TAX 2' ),
			'popular_items'              => __( 'Popular TAX 2' ),
			'all_items'                  => __( 'All TAX 2' ),
			'view_item'					 => __( 'Show TAX 2' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit TAX 2' ),
			'update_item'                => __( 'Update TAX 2' ),
			'add_new_item'               => __( 'Add New TAX 2' ),
			'new_item_name'              => __( 'New TAX 2 Name' ),
			'separate_items_with_commas' => __( 'Separate TAX 2 with commas' ),
			'add_or_remove_items'        => __( 'Add or remove TAX 2' ),
			'choose_from_most_used'      => __( 'Choose from the most used TAX 2' ),
			'not_found'                  => __( 'No TAX 2 found.' ),
	    );
	    
	    $args = array(
	   		'label' 				=> __( 'TAX 2' ),
			'labels' 				=> $labels,
			'public'       			=> false,
			'show_ui'				=> true,
			'show_in_nav_menus' 	=> false,
			'show_tagcloud'			=> false,
			'meta_box_cb'			=> false,
			'show_admin_column' 	=> true,
			'hierarchical' 			=> false,
			'query_var' 			=> true,
	        'rewrite'       		=> false,	// array( 'slug' => 'TAX_2_SLUG', 'with_front' => false),
	    );
	    register_taxonomy( 'POST_1_TAX_2', 'POST_1', $args );
	}
	
	/**
     * Register more taxonomies
     *
     *
     *
     *
     *
     *
     *
     */
	
}

?>