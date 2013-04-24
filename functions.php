<?php
/**
 * pinkXmas functions and definitions
 *
 * @package pinkXmas
 * @since pinkXmas 1.0.0
 */

if ( ! function_exists( 'pinkXmas_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since pinkXmas 1.0.0
 */
function pinkXmas_setup() {
	/*
	add_theme_support('custom-header', array (
	        // Header image default
	       'default-image'			=> get_stylesheet_directory_uri() . '/images/default-logo.png'));*/
}
endif; // pinkXmas_setup
add_action( 'after_setup_theme', 'pinkXmas_setup' );


/**
 * Enqueue scripts and styles
 */
function pinkXmas_scripts() {
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'snowfall', get_stylesheet_directory_uri() . '/js/jquery.snowfall.min.js', array( 'jquery' ), '20130420', true );

	wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=ABeeZee|Leckerli One' );

}
add_action( 'wp_enqueue_scripts', 'pinkXmas_scripts' );
?>
