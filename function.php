<?php
function my_demo_theme_setup() {
    // Enable title tag support
    add_theme_support('title-tag');
    
    // Enable post thumbnails
    add_theme_support('post-thumbnails');
    
    // Register primary menu
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'my-demo-theme'),
    ));
}
add_action('after_setup_theme', 'my_demo_theme_setup');

// Enqueue styles
function my_demo_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/src/output.css');
}
add_action('wp_enqueue_scripts', 'my_demo_theme_scripts');

// Register widget area
function my_demo_theme_widgets() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'my-demo-theme'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'my-demo-theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_demo_theme_widgets');

