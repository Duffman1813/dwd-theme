<?php
function projects_register_custom_post_types() {

    // Projects post type

    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'project' ),
        'add_new_item'       => __( 'Add New Project' ),
        'new_item'           => __( 'New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'view_item'          => __( 'View Project' ),
        'all_items'          => __( 'All Projects' ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Projects:' ),
        'not_found'          => __( 'No projects found.' ),
        'not_found_in_trash' => __( 'No projects found in Trash.' ),
        'archives'           => __( 'Project Archives'),
        'insert_into_item'   => __( 'Insert into project'),
        'uploaded_to_this_item' => __( 'Uploaded to this project'),
        'filter_item_list'   => __( 'Filter works list'),
        'items_list_navigation' => __( 'Projects list navigation'),
        'items_list'         => __( 'Projects list'),
        'featured_image'     => __( 'Project featured image'),
        'set_featured_image' => __( 'Set project featured image'),
        'remove_featured_image' => __( 'Remove project featured image'),
        'use_featured_image' => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail' ),
    );
    register_post_type( 'projects', $args );

}
add_action( 'init', 'projects_register_custom_post_types' );

// Taxonomies

function projects_register_taxonomies() {

    // Add Project Category taxonomy
    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Project Categories' ),
        'all_items'         => __( 'All Project Category' ),
        'parent_item'       => __( 'Parent Project Category' ),
        'parent_item_colon' => __( 'Parent Project Category:' ),
        'edit_item'         => __( 'Edit Project Category' ),
        'view_item'         => __( 'Vview Project Category' ),
        'update_item'       => __( 'Update Project Category' ),
        'add_new_item'      => __( 'Add New Project Category' ),
        'new_item_name'     => __( 'New Project Category Name' ),
        'menu_name'         => __( 'Project Category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-categories' ),
    );
    register_taxonomy( 'project-category', array( 'projects' ), $args );

    // Add Featured taxonomy
$labels = array(
    'name'              => _x( 'Featured', 'taxonomy general name' ),
    'singular_name'     => _x( 'Featured', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Featured' ),
    'all_items'         => __( 'All Featured' ),
    'parent_item'       => __( 'Parent Featured' ),
    'parent_item_colon' => __( 'Parent Featured:' ),
    'edit_item'         => __( 'Edit Featured' ),
    'update_item'       => __( 'Update Featured' ),
    'add_new_item'      => __( 'Add New Featured' ),
    'new_item_name'     => __( 'New Project Featured' ),
    'menu_name'         => __( 'Featured' ),
);

$args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'featured' ),
);

register_taxonomy( 'project-featured', array( 'projects' ), $args );
}
add_action( 'init', 'projects_register_taxonomies');


// this flushes the permalinks if themes are switched

function projects_rewrite_flush() {
    projects_register_custom_post_types();
    projects_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'projects_rewrite_flush' );