<?php
// Enqueue theme styles
function ywtheme_wordpress_enqueue_scripts() {
    wp_enqueue_style('base_theme-style', get_stylesheet_uri());
    wp_enqueue_style('ywtheme_wordpress_output', get_template_directory_uri() . '/src/output.css');
}
add_action('wp_enqueue_scripts', 'ywtheme_wordpress_enqueue_scripts');

// Add theme support
function ywtheme_wordpress_setup() {
    add_theme_support('title-tag'); // Automatically set the <title> tag
    add_theme_support('post-thumbnails'); // Enable featured images
    add_theme_support('custom-logo'); // Enable custom logo
}
add_action('after_setup_theme', 'ywtheme_wordpress_setup');
