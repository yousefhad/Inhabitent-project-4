<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function inhabitent_register_adventure_cpt() {

 	$labels = array(
 		'name'                  => 'Adventures',
 		'singular_name'         => 'Adventure',
 		'menu_name'             => 'Adventures',
 		'name_admin_bar'        => 'Adventure',
 		'archives'              => 'Adventure Archives',
 		'parent_item_colon'     => 'Parent Adventure:',
 		'all_items'             => 'All Adventures',
 		'add_new_item'          => 'Add New Adventure',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New Adventure',
 		'edit_item'             => 'Edit Adventure',
 		'update_item'           => 'Update Adventure',
 		'view_item'             => 'View Adventure',
 		'search_items'          => 'Search Adventure',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured adventure Image',
 		'set_featured_image'    => 'Set featured adventure image',
 		'remove_featured_image' => 'Remove featured adventure image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into adventure',
 		'uploaded_to_this_item' => 'Uploaded to this adventure',
 		'items_list'            => 'Adventures list',
 		'items_list_navigation' => 'Adventures list navigation',
 		'filter_items_list'     => 'Filter adventures list',
 	);
 	$args = array(
 		'label'                 => 'Adventure',
 		'description'           => 'The adventures for the inhabitent site',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 10,
 		'menu_icon'             => 'dashicons-palmtree',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => 'adventures',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'adventure', $args );

 }
 add_action( 'init', 'inhabitent_register_adventure_cpt', 0 );
