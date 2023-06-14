<?php 
add_action( 'init', function() {
   register_post_type( 'messages', [
      'show_ui' => true, 
      'hierarchical' => true,
      'show_in_graphql' => true,
      'capability_type' => 'messages',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'rewrite' => array(
      'slug' => 'messages'
    ),
    'has_archive' => true,
    'labels' => array(
      'name' => 'Messages',
      'add_new_item' => 'Add New Message',
      'edit_item' => 'Edit Message',
      'all_items' => 'Edit All Messages',
      'singular_name' => 'Message',
    ),
    'menu-icon' => 'dashicons-email-alt2',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    // 'graphql_single_name' => 'message', 
    // 'graphql_plural_name' => 'messages',
    'public' => true,
    'publicly_queryable' => true,
   ] );
} );