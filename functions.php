<?php

function style_on_load(){
  wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.2', 'all');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array(), '2.0.2', 'all');
  wp_enqueue_script('jquery-min-js', get_template_directory_uri().'/assets/jquery/jquery.min.js', array(), '2.1.3', 'all');
  wp_enqueue_style('main-css', get_template_directory_uri().'/assets/bootstrap/css/main.css', array(), '1.0.2', 'all');
  wp_enqueue_style('swiper-css', get_template_directory_uri().'/assets/swiper/package/css/swiper.min.css', array(), 'all');
  wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/swiper/package/js/swiper.min.js', array(), true);
  wp_enqueue_style('animate-css', get_template_directory_uri().'/assets/bootstrap/css/animate.css', array(), '1.0.2', 'all');}
add_action('wp_enqueue_scripts','style_on_load');

register_nav_menus(array(
  'header'=>__('Header Menu'),
  'footer'=>__('Footer Menu'),
));

add_theme_support("custom-header");
add_theme_support("post-thumbnails");

add_action('widgets_init', 'myWidget');
function myWidget(){
  
  register_sidebar(array(
    'name'=>'Header Logo',
    'id' => 'logo_header'
  ));
  register_sidebar(array(
    'name'=>'Footer Logo',
    'id' => 'logo_footer'
  ));
  register_sidebar(array(
    'name'=>'Dinner Logo',
    'id' => 'dinner_logo'
  ));
  register_sidebar(array(
    'name'=>'Newsletter',
    'id' => 'newsletter1'
  ));
  register_sidebar(array(
    'name'=>'Footer Logo',
    'id' => 'logo_footer'
  ));
  register_sidebar(array(
    'name'=>'Footer Text',
    'id' => 'footer_text'
  ));
  register_sidebar(array(
    'name'=>'Phone',
    'id' => 'phone_contact'
  ));
  register_sidebar(array(
    'name'=>'Footer Mail',
    'id' => 'mail_contact'
  ));
  register_sidebar(array(
    'name'=>'Footer Address',
    'id' => 'address_contact'
  ));
  }
  
function custom_post_type(){
    
  $labels_frontpage = array(
    'name' => 'Home Slides',
    );
    register_post_type('homeslider', array(
    'labels' => $labels_frontpage,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'thumbnail',
    'revisions',),
    'menu_position' => 8,
    'exclude_from_search' => false,
    'menu_icon' => 'dashicons-portfolio',
    ));

  $labels_frontpage = array(
    'name' => 'We Focus On',
    );
    register_post_type('wefocuson', array(
    'labels' => $labels_frontpage,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'thumbnail',
    'revisions',),
    'menu_position' => 8,
    'exclude_from_search' => false,
    'menu_icon' => 'dashicons-code-standards',
    ));
  $labels_frontpage = array(
    'name' => 'Impressum',
    );
    register_post_type('impressum', array(
    'labels' => $labels_frontpage,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'thumbnail',
    'revisions',),
    'menu_position' => 8,
    'exclude_from_search' => false,
    'menu_icon' => 'dashicons-format-gallery',
    ));
  $labels_frontpage = array(
    'name' => 'Team',
    );
    register_post_type('team', array(
    'labels' => $labels_frontpage,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
    'title',
    'editor',
    'excerpt',
    'thumbnail',
    'revisions',),
    'menu_position' => 8,
    'exclude_from_search' => false,
    'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    ));

    $labels_frontpage = array(
      'name' => 'Menu Posts',
      );
      register_post_type('menu', array(
      'labels' => $labels_frontpage,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',),
      'menu_position' => 8,
      'exclude_from_search' => false,
      'menu_icon' => 'dashicons-text-page',
      ));
}
  
add_action('init', 'custom_post_type');


add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {


$labels2 = array(
'name' => _x( 'Menu Categories', 'taxonomy general gesundheit' ),
'singular_name' => _x( 'Menu Category', 'taxonomy singular gesundheit' ),//jo te kategories
'search_items' => __( 'Search Menu Categories' ),
'all_items' => __( 'All Menu Categories' ),
'parent_item' => __( 'Parent Menu Category' ),
'parent_item_colon' => __( 'Parent Menu Category:' ),
'edit_item' => __( 'Edit Menu Category' ),
'update_item' => __( 'Update Menu Category' ),
'add_new_item' => __( 'Add New Menu Category' ),
'new_item_name' => __( 'New Menu Category Name' ),
'menu_name' => __( 'Menu Categories' ),
);

register_taxonomy('menucategory',array('menu'), array(
'hierarchical' => true,
'labels' => $labels2,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'menucategory' ),
));
}