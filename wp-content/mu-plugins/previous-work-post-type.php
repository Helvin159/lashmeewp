<?php 
add_action( 'init', function() {
   register_post_type( 'previouswork', [
      'show_ui' => true, 
      'hierarchical' => true,
      'show_in_graphql' => true,
      'capability_type' => 'previouswork',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'rewrite' => array(
      'slug' => 'previouswork'
   ),
   'has_archive' => true,
   'labels' => array(
      'name' => 'Previous Work',
      'add_new_item' => 'Add New Previous Work',
      'edit_item' => 'Edit Previous Work',
      'all_items' => 'All Previous Work',
      'singular_name' => 'Previous Work',
   ),
   'menu_icon' => 'dashicons-portfolio',
   'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
   'graphql_single_name' => 'previousWork', 
   'graphql_plural_name' => 'previousWorks',
   'public' => true,
   'publicly_queryable' => true,
   ] );
} );
