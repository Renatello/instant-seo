<?php
/*
Plugin Name: Instant Performance & SEO
Plugin URI: https://renatello.com/instant-seo/
Description: Improve your site SEO and performance.
Author: Renat Galyamov
Version: 1.5
Author URI: https://renatello.com/
*/

add_action( 'wp_enqueue_scripts', 'instantpage_wp_enqueue_scripts' );
add_filter( 'script_loader_tag', 'instantpage_script_loader_tag', 10, 2 );

function instantpage_wp_enqueue_scripts() {
  wp_enqueue_script( 'instantpage', plugin_dir_url( __FILE__ ) . 'js/instantpage.js', array(), '1.5', true );
}

function instantpage_script_loader_tag( $tag, $handle ) {
  if ( 'instantpage' === $handle ) {
    $tag = str_replace( 'text/javascript', 'module', $tag );
  }
  return $tag;
}

### Function: Instant Performance & SEO Menu
add_action('admin_menu', 'instant_seo_menu');
function instant_seo_menu() {
	if (function_exists('add_options_page')) {
		add_options_page(__('Instant SEO', 'instant-seo'), __('Instant SEO', 'instant-seo'), 'manage_options', 'instant-seo/instant-seo-options.php') ;
	}
}