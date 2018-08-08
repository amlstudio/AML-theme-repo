<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_script( 'custom-functions', get_template_directory_uri() . '/js/custom-functions.js', array(),null, true);
		wp_enqueue_script( 'usp-functions', get_template_directory_uri() . '/js/usp-functions.js', array(),null, true);

	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

//scripts for particles 
function enqueue_particles() {
    wp_register_style('particles-styles', get_stylesheet_directory_uri() .'/css/particle.css', array());
    wp_enqueue_style('particles-styles');    
    wp_enqueue_script('particles-cdn', '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js');
    wp_enqueue_script('particles-js', get_stylesheet_directory_uri() .'/js/particle.js', array('particles-cdn'));
}
add_action('wp_enqueue_scripts', 'enqueue_particles');

