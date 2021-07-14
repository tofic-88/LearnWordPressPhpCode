<?php 

function mytheme_files() { 
  wp_enqueue_style( 'style', get_stylesheet_uri()); 
} 

add_action( 'wp_enqueue_scripts', 'mytheme_files' );

// Navigation Menus: from here we save both location on Wordpress
register_nav_menus( array(
  'primary' => __( 'Primary Menu'),
  'footer' => __( 'Footer Menu'),
));