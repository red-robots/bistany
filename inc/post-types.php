<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Portfolios
  
  $labels = array(
	 'name' => _x('Portfolio', 'post type general name'),
    'singular_name' => _x('Portfolio', 'post type singular name'),
    'add_new' => _x('Add New', 'Portfolio Item'),
    'add_new_item' => __('Add New Portfolio'),
    'edit_item' => __('Edit Portfolios'),
    'new_item' => __('New Portfolio'),
    'view_item' => __('View Portfolios'),
    'search_items' => __('Search Portfolios'),
    'not_found' =>  __('No Portfolios found'),
    'not_found_in_trash' => __('No Portfolios found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Portfolio'
  );
  $args = array(
	 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('portfolio',$args); // name used in query
  
  $labels = array(
   'name' => _x('Before & After', 'post type general name'),
    'singular_name' => _x('Before & After', 'post type singular name'),
    'add_new' => _x('Add New', 'Before & After Item'),
    'add_new_item' => __('Add New Before & After'),
    'edit_item' => __('Edit Before & After'),
    'new_item' => __('New Before & After'),
    'view_item' => __('View Before & After'),
    'search_items' => __('Search Before & After'),
    'not_found' =>  __('No Before & After found'),
    'not_found_in_trash' => __('No Before & After found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Before & After'
  );
  $args = array(
   'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array('slug' => 'before-after'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('before_after',$args); // name used in query


    $labels = array(
   'name' => _x('Staff', 'post type general name'),
    'singular_name' => _x('Staff', 'post type singular name'),
    'add_new' => _x('Add New', 'Staff'),
    'add_new_item' => __('Add New Staff'),
    'edit_item' => __('Edit Staff'),
    'new_item' => __('New Staff'),
    'view_item' => __('View Staff'),
    'search_items' => __('Search Staff'),
    'not_found' =>  __('No Staff found'),
    'not_found_in_trash' => __('No Staff found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Staff'
  );
  $args = array(
   'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('staff',$args); // name used in query


    $labels = array(
   'name' => _x('Press & Awards', 'post type general name'),
    'singular_name' => _x('Press & Awards', 'post type singular name'),
    'add_new' => _x('Add New', 'Press & Awards'),
    'add_new_item' => __('Add New Press & Awards'),
    'edit_item' => __('Edit Press & Awards'),
    'new_item' => __('New Press & Awards'),
    'view_item' => __('View Press & Awards'),
    'search_items' => __('Search Press & Awards'),
    'not_found' =>  __('No Press & Awards found'),
    'not_found_in_trash' => __('No Press & Awards found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Press & Awards'
  );
  $args = array(
   'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array('slug' => 'press-awards'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('press_awards',$args); // name used in query
  



    $labels = array(
   'name' => _x('Vendors', 'post type general name'),
    'singular_name' => _x('Vendors', 'post type singular name'),
    'add_new' => _x('Add New', 'Vendors'),
    'add_new_item' => __('Add New Vendors'),
    'edit_item' => __('Edit PVendors'),
    'new_item' => __('New Vendors'),
    'view_item' => __('View Vendors'),
    'search_items' => __('Search Vendors'),
    'not_found' =>  __('No Vendors found'),
    'not_found_in_trash' => __('No Vendors found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Vendors'
  );
  $args = array(
   'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array('slug' => 'press-awards'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('vendor',$args); // name used in query



  } // close custom post type