<?php 
// Post Types
function lashme_post_types(){
    // Previous Work 
  register_post_type('prevwork', array(
    
    'capability_type' => 'prevwork',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'prevwork'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Previous Work',
      'add_new_item' => 'Add New Previous Work',
      'edit_item' => 'Edit Previous Work',
      'all_items' => 'All Previous Work',
      'singular_name' => 'Previous Work',
    ),
    'show_in_graphql' => true,
        'graphql_single_name' => 'Previous Work',
        'graphql_plural_name' => 'All Previous Work',
    'menu_icon' => 'dashicons-portfolio'
  ));
    
  register_post_type('services', array(
    
    'capability_type' => 'services',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'services'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service',
    ),
    'menu_icon' => 'dashicons-performance'
  ));
    
  register_post_type('messages', array(
    
    'capability_type' => 'messages',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'messages'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Messages',
      'add_new_item' => 'Add New Message',
      'edit_item' => 'Edit Messages',
      'all_items' => 'All Messages',
      'singular_name' => 'Message',
    ),
    'menu_icon' => 'dashicons-email-alt2'
  ));
   
}

add_action('init', 'lashme_post_types');