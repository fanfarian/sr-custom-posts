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
			'name'                       => _x( 'TAX 1', 'taxonomy general name', 'srcp' ),
			'singular_name'              => _x( 'TAX 1', 'taxonomy singular name', 'srcp' ),
			'menu_name'                  => __( 'TAX 1', 'srcp' ),			    

			'search_items'               => __( 'Search TAX 1', 'srcp' ),
			'popular_items'              => __( 'Popular TAX 1', 'srcp' ),
			'all_items'                  => __( 'All TAX 1', 'srcp' ),
			'view_item'					 => __( 'Show TAX 1', 'srcp' ),
			'parent_item'                => __( 'TAX 1 Parent Item', 'srcp' ),
			'parent_item_colon'          => __( 'TAX 1 Parent Item:', 'srcp' ),
			'edit_item'                  => __( 'Edit TAX 1', 'srcp' ),
			'update_item'                => __( 'Update TAX 1', 'srcp' ),
			'add_new_item'               => __( 'Add New TAX 1', 'srcp' ),
			'new_item_name'              => __( 'New TAX 1 Name', 'srcp'  ),
			'separate_items_with_commas' => __( 'Separate TAX 1 with commas', 'srcp'  ),
			'add_or_remove_items'        => __( 'Add or remove TAX 1', 'srcp'  ),
			'choose_from_most_used'      => __( 'Choose from the most used TAX 1', 'srcp'  ),
			'not_found'                  => __( 'No TAX 1 found.', 'srcp'  ),
	    );
	    
	    $args = array(
	   		'label' 				=> __( 'TAX 1', 'srcp'  ),
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
			'name'                       => _x( 'TAX 2', 'taxonomy general name', 'srcp' ),
			'singular_name'              => _x( 'TAX 2', 'taxonomy singular name', 'srcp' ),
			'menu_name'                  => __( 'TAX 2', 'srcp' ),			    

			'search_items'               => __( 'Search TAX 2', 'srcp' ),
			'popular_items'              => __( 'Popular TAX 2', 'srcp' ),
			'all_items'                  => __( 'All TAX 2', 'srcp' ),
			'view_item'					 => __( 'Show TAX 2', 'srcp' ),
			'parent_item'                => __( 'TAX 2 Parent Item', 'srcp' ),
			'parent_item_colon'          => __( 'TAX 2 Parent Item:', 'srcp' ),
			'edit_item'                  => __( 'Edit TAX 2', 'srcp' ),
			'update_item'                => __( 'Update TAX 2', 'srcp' ),
			'add_new_item'               => __( 'Add New TAX 2', 'srcp' ),
			'new_item_name'              => __( 'New TAX 2 Name', 'srcp'  ),
			'separate_items_with_commas' => __( 'Separate TAX 2 with commas', 'srcp'  ),
			'add_or_remove_items'        => __( 'Add or remove TAX 2', 'srcp'  ),
			'choose_from_most_used'      => __( 'Choose from the most used TAX 2', 'srcp'  ),
			'not_found'                  => __( 'No TAX 2 found.', 'srcp'  ),
	    );
	    
	    $args = array(
	   		'label' 				=> __( 'TAX 2', 'srcp'  ),
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