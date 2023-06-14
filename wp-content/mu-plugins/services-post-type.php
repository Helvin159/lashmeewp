<?php 
add_action( 'init', function() {
   register_post_type( 'services', [
      'show_ui' => true, 
      'hierarchical' => true,
      'show_in_graphql' => true,
      'capability_type' => 'services',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'rewrite' => array(
      'slug' => 'services'
    ),
    'has_archive' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'Edit All Services',
      'singular_name' => 'Service',
    ),
    'menu_icon' => 'dashicons-performance',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'graphql_single_name' => 'service', 
    'graphql_plural_name' => 'services',
    'public' => true,
    'publicly_queryable' => true,
   ] );
} );