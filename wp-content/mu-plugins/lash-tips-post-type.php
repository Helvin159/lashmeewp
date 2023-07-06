<?php 
add_action( 'init', function() {
   register_post_type( 'lashtips', [
      'show_ui' => true, 
      'hierarchical' => true,
      'show_in_graphql' => true,
      'capability_type' => 'lashtips',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'rewrite' => array(
      'slug' => 'lashtips'
    ),
    'has_archive' => true,
    'labels' => array(
      'name' => 'Lash Tips',
      'add_new_item' => 'Add New Tip',
      'edit_item' => 'Edit Tip',
      'all_items' => 'All Lash Tips',
      'singular_name' => 'Lash Tip',
    ),
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'graphql_single_name' => 'tip', 
      'graphql_plural_name' => 'lash tips',
      'public' => true,
      'publicly_queryable' => true,
   ] );
} );