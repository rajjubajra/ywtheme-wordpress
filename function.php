<?php
// Enqueue Bootstrap CSS and JS
function bootstrap_theme_enqueue_scripts() {
    // Bootstrap CSS
    wp_enqueue_style( 
        'bootstrap-css', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', 
        array(), 
        '5.1.3' 
    );
    
    // Theme stylesheet
    wp_enqueue_style( 
        'theme-style', 
        get_stylesheet_uri(), 
        array('bootstrap-css'), 
        filemtime( get_template_directory() . '/style.css' ) 
    );
    
    // Bootstrap JS
    wp_enqueue_script( 
        'bootstrap-js', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', 
        array(), 
        '5.1.3', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_theme_enqueue_scripts' );

// Theme support
function bootstrap_theme_setup() {
    // Add featured image support
    add_theme_support( 'post-thumbnails' );
    
    // Add title tag support
    add_theme_support( 'title-tag' );
    
    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bootstrap-theme' ),
    ) );
    
    // Add HTML5 support
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'bootstrap_theme_setup' );

// Register sidebar
function bootstrap_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'bootstrap-theme' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'bootstrap-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s card mb-4">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title card-header">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'bootstrap_theme_widgets_init' );