<?php
// Enqueue theme styles
function ywtheme_wordpress_enqueue_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    wp_enqueue_style('base_theme-style', get_stylesheet_uri());
    
    // Enqueue Bootstrap JavaScript Bundle (includes Popper.js)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ywtheme_wordpress_enqueue_scripts');

// Add theme support
function ywtheme_wordpress_setup() {
    add_theme_support('title-tag'); // Automatically set the <title> tag
    add_theme_support('post-thumbnails'); // Enable featured images
    add_theme_support('custom-logo'); // Enable custom logo
}
add_action('after_setup_theme', 'ywtheme_wordpress_setup');
