<?php

/*
Plugin Name: ACF Slick Slider
Plugin URI: http://www.comowebsites.com/sandbox
Description: Adds a carousel slider with Slick, ACF
Author: Steve Struemph
Author URI: https://www.stevestruemph.com
Version: 1.0.0
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/* ---------------------------------- *
 * constants
 * ---------------------------------- */

if ( !defined( 'FUNC_PLUGIN_DIR' ) ) {
	define( 'FUNC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'FUNC_PLUGIN_URL' ) ) {
	define( 'FUNC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/* ---------------------------------- *
 * scripts
 * ---------------------------------- */

/* Slick & Fancybox */
add_action( 'wp_enqueue_scripts', 'ss_enqueue_scripts' );

function ss_enqueue_scripts() {
	wp_enqueue_style( 'slick-style', plugins_url('/js/slick/slick.css', __FILE__ ), array() );
	wp_enqueue_script( 'slick', plugins_url('/js/slick/slick.min.js', __FILE__ ), array( 'jquery' ), '', true );
	wp_enqueue_script( 'slick-init', plugins_url('/js/slick/slick-init.js', __FILE__ ), array( 'jquery' ), '', true );
	wp_enqueue_style( 'fancybox-styles', plugins_url('/css/jquery.fancybox-1.3.4.css', __FILE__ ), array() );
	wp_enqueue_script( 'fancybox', plugins_url('/js/jquery.fancybox-1.3.4.pack.js', __FILE__ ), array( 'jquery' ), '', true );	
	wp_enqueue_script( 'fancybox-easing', plugins_url('/js/jquery.easing-1.3.pack.js', __FILE__ ), array( 'jquery' ), '', true );	
	wp_enqueue_script( 'fancybox-mousewheel', plugins_url('/js/jquery.mousewheel-3.0.4.pack.js', __FILE__ ), array( 'jquery' ), '', true );
	wp_enqueue_script( 'fancybox-init',  plugins_url('/js/fancybox-init.js', __FILE__ ), array( 'fancybox' ), '1.0.0', true );
}

/* ---------------------------------- *
 * includes
 * ---------------------------------- */

/* ACF is activated */
    if( class_exists('acf') ) {
		include( FUNC_PLUGIN_DIR . 'includes/carousel-slider.php' );
    }
