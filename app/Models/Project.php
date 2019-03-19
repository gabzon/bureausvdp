<?php

if ( ! function_exists('projects_post_type') ) {

  // Register Custom Post Type
  function projects_post_type() {

    $labels = array(
      'name'                  => _x( 'Projects', 'Post Type General Name', 'sage' ),
      'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'sage' ),
      'menu_name'             => __( 'Projects', 'sage' ),
      'name_admin_bar'        => __( 'Projects', 'sage' ),
      'archives'              => __( 'Projects Archives', 'sage' ),
      'attributes'            => __( 'Project Attributes', 'sage' ),
      'parent_item_colon'     => __( 'Parent Project:', 'sage' ),
      'all_items'             => __( 'All Projects', 'sage' ),
      'add_new_item'          => __( 'Add New Project', 'sage' ),
      'add_new'               => __( 'Add New', 'sage' ),
      'new_item'              => __( 'New Project', 'sage' ),
      'edit_item'             => __( 'Edit Project', 'sage' ),
      'update_item'           => __( 'Update Project', 'sage' ),
      'view_item'             => __( 'View Project', 'sage' ),
      'view_items'            => __( 'View Project', 'sage' ),
      'search_items'          => __( 'Search Projects', 'sage' ),
      'not_found'             => __( 'Not found', 'sage' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'sage' ),
      'featured_image'        => __( 'Featured Image', 'sage' ),
      'set_featured_image'    => __( 'Set featured image', 'sage' ),
      'remove_featured_image' => __( 'Remove featured image', 'sage' ),
      'use_featured_image'    => __( 'Use as featured image', 'sage' ),
      'insert_into_item'      => __( 'Insert into Project', 'sage' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Project', 'sage' ),
      'items_list'            => __( 'Projects list', 'sage' ),
      'items_list_navigation' => __( 'Projects list navigation', 'sage' ),
      'filter_items_list'     => __( 'Filter Projects list', 'sage' ),
    );
    $args = array(
      'label'                 => __( 'Project', 'sage' ),
      'description'           => __( 'List of projects made by SVPD', 'sage' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks' ),
      'taxonomies'            => array( 'category', ' post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-admin-appearance',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'show_in_rest'          => true,
    );
    register_post_type( 'project', $args );

  }
  add_action( 'init', 'projects_post_type', 0 );

}
