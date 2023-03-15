<?php
/**
 * Custom theme functions
 * 
 * @package CustomTheme
 * @since CustomeTheme 1.0
 */

function custom_theme() {
	/* CSS */
	wp_enqueue_style('custom-style',  get_stylesheet_uri(), array(), '1.0');
	if(is_404()) {
		wp_enqueue_script('404-style', get_template_directory_uri() . '/assets/styles/404.css', array(), '1.0');
	}
	/* JS */
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'custom-style');

/* Theme support */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');