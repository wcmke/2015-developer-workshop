<?php
/**
 * @package WCMKE_Emplpyees
 * @version 1.0
 */
/*
Plugin Name: WCMKE Employees
Description: Add custom post type and taxonomies for employees
Author: WCMKE
Version: 1.0
*/

if ( ! function_exists('wcmke_employee_cpt') ) {

// Register Custom Post Type
function wcmke_employee_cpt() {

	$labels = array(
		'name'                => _x( 'Employees', 'Post Type General Name', 'wcmke' ),
		'singular_name'       => _x( 'Employee', 'Post Type Singular Name', 'wcmke' ),
		'menu_name'           => __( 'Employees', 'wcmke' ),
		'name_admin_bar'      => __( 'Employees', 'wcmke' ),
		'parent_item_colon'   => __( 'Parent Employee:', 'wcmke' ),
		'all_items'           => __( 'All Employees', 'wcmke' ),
		'add_new_item'        => __( 'Add New Employee', 'wcmke' ),
		'add_new'             => __( 'Add New Employee', 'wcmke' ),
		'new_item'            => __( 'New Employee', 'wcmke' ),
		'edit_item'           => __( 'Edit Employee', 'wcmke' ),
		'update_item'         => __( 'Update Employee', 'wcmke' ),
		'view_item'           => __( 'View Employee', 'wcmke' ),
		'search_items'        => __( 'Search Employees', 'wcmke' ),
		'not_found'           => __( 'Not found', 'wcmke' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'wcmke' ),
	);
	$rewrite = array(
		'slug'                => 'wcmke-employee',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'wcmke_employee', 'wcmke' ),
		'description'         => __( 'Employees of WC MKE', 'wcmke' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'wcmke-employees',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'wcmke-employee',
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'wcmke_employee', $args );

}

// Hook into the 'init' action
add_action( 'init', 'wcmke_employee_cpt', 0 );

}


if ( ! function_exists( 'wcmke_departments' ) ) {

// Register Custom Taxonomy
function wcmke_departments() {

	$labels = array(
		'name'                       => _x( 'Departments', 'Taxonomy General Name', 'wcmke' ),
		'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'wcmke' ),
		'menu_name'                  => __( 'Departments', 'wcmke' ),
		'all_items'                  => __( 'All Departments', 'wcmke' ),
		'parent_item'                => __( 'Parent Department', 'wcmke' ),
		'parent_item_colon'          => __( 'Parent Department:', 'wcmke' ),
		'new_item_name'              => __( 'New Item Department', 'wcmke' ),
		'add_new_item'               => __( 'Add New Department', 'wcmke' ),
		'edit_item'                  => __( 'Edit Department', 'wcmke' ),
		'update_item'                => __( 'Update Department', 'wcmke' ),
		'view_item'                  => __( 'View Department', 'wcmke' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'wcmke' ),
		'add_or_remove_items'        => __( 'Add or remove Departments', 'wcmke' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wcmke' ),
		'popular_items'              => __( 'Popular Departments', 'wcmke' ),
		'search_items'               => __( 'Search Departments', 'wcmke' ),
		'not_found'                  => __( 'Not Found', 'wcmke' ),
	);
	$rewrite = array(
		'slug'                       => 'wcmke-department',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => 'wcmke_departments',
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'wcmke_department', array( 'wcmke_employee' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'wcmke_departments', 0 );

}
