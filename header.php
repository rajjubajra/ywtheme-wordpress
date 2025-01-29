<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
        <nav class="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
            ));
            ?>
        </nav>
        <link href="./src/output.css" rel="stylesheet">
    </header>
    <div class="content-area">
        <h1>This is from header page</h1