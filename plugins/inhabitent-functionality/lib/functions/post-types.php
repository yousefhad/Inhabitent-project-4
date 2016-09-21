<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function tent_register_product_cpt() {

 	$labels = array(
 		'name'                  => 'Products',
 		'singular_name'         => 'Product',
 		'menu_name'             => 'Products',
 		'name_admin_bar'        => 'Product',
 		'archives'              => 'Product Archives',
 		'parent_item_colon'     => 'Parent Product:',
 		'all_items'             => 'All Products',
 		'add_new_item'          => 'Add New Product',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New Product',
 		'edit_item'             => 'Edit Product',
 		'update_item'           => 'Update Product',
 		'view_item'             => 'View Product',
 		'search_items'          => 'Search Product',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured Product Image',
 		'set_featured_image'    => 'Set featured product image',
 		'remove_featured_image' => 'Remove featured product image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into product',
 		'uploaded_to_this_item' => 'Uploaded to this product',
 		'items_list'            => 'Products list',
 		'items_list_navigation' => 'Products list navigation',
 		'filter_items_list'     => 'Filter products list',
 	);
 	$args = array(
 		'label'                 => 'Product',
 		'description'           => 'The products for the inhabitent site',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 10,
 		'menu_icon'             => 'dashicons-cart',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => 'products',
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'product', $args );

 }
 add_action( 'init', 'tent_register_product_cpt', 0 );
