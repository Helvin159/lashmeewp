<?php 
// Post Types
function lashme_post_types(){
    // Previous Work 
  register_post_type('previouswork', array(
    
    'capability_type' => 'previouswork',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'previouswork'
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
    'menu_icon' => 'dashicons-performance',
       'show_in_graphql' => true,
        'graphql_single_name' => 'Service',
        'graphql_plural_name' => 'All Services',
    'menu_icon' => 'dashicons-portfolio'
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
    'menu_icon' => 'dashicons-email-alt2',
       'show_in_graphql' => true,
        'graphql_single_name' => 'Message',
        'graphql_plural_name' => 'All Messages',
    'menu_icon' => 'dashicons-portfolio'
  ));
   
}

add_action('init', 'lashme_post_types');