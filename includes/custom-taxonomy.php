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
			'labels'				=> $labels,
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'show_in_nav_menus'     => true,
			'show_tagcloud'         => false,
			'query_var' 			=> true,
			'meta_box_cb'			=> true,
			'show_in_quick_edit'	=> true,
	        'rewrite'       		=> false,	// array( 'slug' => 'TAX_1_SLUG', 'with_front' => false),
			'show_in_rest'			=> true,
	        'rest_base'				=> 'surfaces-api',
	    );
	    register_taxonomy( 'POST_1_TAX_1', array( 'POST_1' ), $args );
	    
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