<?php
/*
Plugin Name: Instant Performance & SEO
Plugin URI: https://renatello.com/instant-seo/
Description: Improve your site SEO and performance.
Author: Renat Galyamov
Version: 1.1
Author URI: https://renatello.com/
*/

add_action( 'wp_enqueue_scripts', 'instantpage_wp_enqueue_scripts' );
add_filter( 'script_loader_tag', 'instantpage_script_loader_tag', 10, 2 );

function instantpage_wp_enqueue_scripts() {
  wp_enqueue_script( 'instantpage', plugin_dir_url( __FILE__ ) . 'js/instantpage-1.2.2.js', array(), '1.1', true );
}

function instantpage_script_loader_tag( $tag, $handle ) {
  if ( 'instantpage' === $handle ) {
    $tag = str_replace( 'text/javascript', 'module', $tag );
  }
  return $tag;
}
