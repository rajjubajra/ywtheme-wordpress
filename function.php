<?php
// Enqueue theme styles
function base_theme_enqueue_scripts() {
    wp_enqueue_style('base_theme-style', get_stylesheet_uri());
    wp_enqueue_style('base_theme_output', get_template_directory_uri().'/src/output.css');
}
add_action('wp_enqueue_scripts', 'base_theme_enqueue_scripts');

// Add theme support
function base_theme_setup() {
    add_theme_support('title-tag'); // Automatically set the <title> tag
    add_theme_support('post-thumbnails'); // Enable featured images
    add_theme_support('custom-logo'); // Enable custom logo
}
add_action('after_setup_theme', 'base_theme_setup');
