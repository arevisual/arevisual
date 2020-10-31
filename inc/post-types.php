<?php
/**
 * Custom Post Types
 *
 * @package ARE_Visual
 */

 // Register Custom Post Type
function arevisual_portfolio_post_type() {

	$labels  = array(
		'name'                  => _x( 'Portfolio Items', 'Post Type General Name', 'arevisual' ),
		'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'arevisual' ),
		'menu_name'             => __( 'Portfolio', 'arevisual' ),
		'name_admin_bar'        => __( 'Portfolio', 'arevisual' ),
		'archives'              => __( 'Portfolio Archives', 'arevisual' ),
		'attributes'            => __( 'Portfolio Attributes', 'arevisual' ),
		'parent_item_colon'     => __( 'Portfolio Parent Item:', 'arevisual' ),
		'all_items'             => __( 'All Portfolio Items', 'arevisual' ),
		'add_new_item'          => __( 'Add New Portfolio Item', 'arevisual' ),
		'add_new'               => __( 'Add New', 'arevisual' ),
		'new_item'              => __( 'New Portfolio Item', 'arevisual' ),
		'edit_item'             => __( 'Edit Portfolio Item', 'arevisual' ),
		'update_item'           => __( 'Update Portfolio Item', 'arevisual' ),
		'view_item'             => __( 'View Portfolio Item', 'arevisual' ),
		'view_items'            => __( 'View Portfolio Items', 'arevisual' ),
		'search_items'          => __( 'Search Portfolio Item', 'arevisual' ),
		'not_found'             => __( 'Not found', 'arevisual' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'arevisual' ),
		'featured_image'        => __( 'Featured Image', 'arevisual' ),
		'set_featured_image'    => __( 'Set featured image', 'arevisual' ),
		'remove_featured_image' => __( 'Remove featured image', 'arevisual' ),
		'use_featured_image'    => __( 'Use as featured image', 'arevisual' ),
		'insert_into_item'      => __( 'Insert into item', 'arevisual' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'arevisual' ),
		'items_list'            => __( 'Items list', 'arevisual' ),
		'items_list_navigation' => __( 'Items list navigation', 'arevisual' ),
		'filter_items_list'     => __( 'Filter items list', 'arevisual' ),
	);
	$rewrite = array(
		'slug'       => 'portfolio_archive',
		'with_front' => false,
		'pages'      => true,
		'feeds'      => true,
	);
	$args    = array(
		'label'               => __( 'Portfolio Item', 'arevisual' ),
		'description'         => __( 'Post Type Description', 'arevisual' ),
		'labels'              => $labels,
		'show_in_rest'        => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes', 'post-formats' ),
		'taxonomies'          => array( 'skills', 'role' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'arevisual_portfolio_post_type', 0 );

// Register Custom Post Type
function arevisual_jobs_post_type() {

	$labels = array(
		'name'                  => _x( 'Jobs', 'Post Type General Name', 'arevisual' ),
		'singular_name'         => _x( 'Job', 'Post Type Singular Name', 'arevisual' ),
		'menu_name'             => __( 'Jobs', 'arevisual' ),
		'name_admin_bar'        => __( 'Jobs', 'arevisual' ),
		'archives'              => __( 'Job Archives', 'arevisual' ),
		'attributes'            => __( 'Job Attributes', 'arevisual' ),
		'parent_item_colon'     => __( 'Parent Job:', 'arevisual' ),
		'all_items'             => __( 'All Jobs', 'arevisual' ),
		'add_new_item'          => __( 'Add New Job', 'arevisual' ),
		'add_new'               => __( 'Add New', 'arevisual' ),
		'new_item'              => __( 'New Job', 'arevisual' ),
		'edit_item'             => __( 'Edit Job', 'arevisual' ),
		'update_item'           => __( 'Update Job', 'arevisual' ),
		'view_item'             => __( 'View Job', 'arevisual' ),
		'view_items'            => __( 'View Jobs', 'arevisual' ),
		'search_items'          => __( 'Search Job', 'arevisual' ),
		'not_found'             => __( 'Not found', 'arevisual' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'arevisual' ),
		'featured_image'        => __( 'Featured Image', 'arevisual' ),
		'set_featured_image'    => __( 'Set featured image', 'arevisual' ),
		'remove_featured_image' => __( 'Remove featured image', 'arevisual' ),
		'use_featured_image'    => __( 'Use as featured image', 'arevisual' ),
		'insert_into_item'      => __( 'Insert into item', 'arevisual' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'arevisual' ),
		'items_list'            => __( 'Items list', 'arevisual' ),
		'items_list_navigation' => __( 'Items list navigation', 'arevisual' ),
		'filter_items_list'     => __( 'Filter items list', 'arevisual' ),
	);
	$args   = array(
		'label'               => __( 'Job', 'arevisual' ),
		'description'         => __( 'Post Type Description', 'arevisual' ),
		'labels'              => $labels,
		'show_in_rest'        => true,
		'supports'            => array( 'title', 'editor', 'revisions' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-id-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'jobs', $args );

}
add_action( 'init', 'arevisual_jobs_post_type', 0 );
