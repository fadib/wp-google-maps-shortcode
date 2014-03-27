<?php
/*
Plugin Name: WP Google Maps Shortcode
Plugin URL: http://fadib.net/wp-gmaps-shortcode
Description: Adds a Google Maps short code within your post/page
Version: 1.0
Author: Fahmi Adib
Author URI: http://fadib.net
Contributors: fahmiadib
*/


/**
 * Loads Google Map API
 *
 * @since       1.0
 * @return      void
*/
function wp_gmaps_load_scripts() {
	wp_register_script( 'wp-gmaps-api', '//maps.google.com/maps/api/js?sensor=false' );
}
add_action( 'wp_enqueue_scripts', 'wp_gmaps_load_scripts' );