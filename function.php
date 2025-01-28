<?php
// Enqueue theme styles
function base_theme_enqueue_scripts() {
    wp_enqueue_style('base-theme-style', get_stylesheet_uri());
    wp_enqueue_style('tailwind-base-theme-style', get_template_directory_uri().'/src/output.css', array(), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'base_theme_enqueue_scripts');

// Add theme support
function base_theme_setup() {
    add_theme_support('title-tag'); // Automatically set the <title> tag
    add_theme_support('post-thumbnails'); // Enable featured images
    add_theme_support('custom-logo'); // Enable custom logo
}
add_action('after_setup_theme', 'base_theme_setup');
