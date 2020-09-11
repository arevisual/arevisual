<?php
/**
 * Custom Post taxonomies
 *
 * @package ARE_Visual
 */
// Register Custom Taxonomy
function arevisual_skills_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Skills', 'Taxonomy General Name', 'arevisual' ),
		'singular_name'              => _x( 'Skill', 'Taxonomy Singular Name', 'arevisual' ),
		'menu_name'                  => __( 'Skills', 'arevisual' ),
		'all_items'                  => __( 'All Skills', 'arevisual' ),
		'parent_item'                => __( 'Parent Skill', 'arevisual' ),
		'parent_item_colon'          => __( 'Parent Skill:', 'arevisual' ),
		'new_item_name'              => __( 'New Skill Name', 'arevisual' ),
		'add_new_item'               => __( 'Add New Skill', 'arevisual' ),
		'edit_item'                  => __( 'Edit Skill', 'arevisual' ),
		'update_item'                => __( 'Update Skill', 'arevisual' ),
		'view_item'                  => __( 'View Skill', 'arevisual' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'arevisual' ),
		'add_or_remove_items'        => __( 'Add or remove Skills', 'arevisual' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'arevisual' ),
		'popular_items'              => __( 'Popular Items', 'arevisual' ),
		'search_items'               => __( 'Search Items', 'arevisual' ),
		'not_found'                  => __( 'Not Found', 'arevisual' ),
		'no_terms'                   => __( 'No items', 'arevisual' ),
		'items_list'                 => __( 'Items list', 'arevisual' ),
		'items_list_navigation'      => __( 'Items list navigation', 'arevisual' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Skills', array( 'portfolio' ), $args );

}
add_action( 'init', 'arevisual_skills_taxonomy', 0 );