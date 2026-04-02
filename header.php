<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="background">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/background.svg' ?>" alt="background image">
    </div>
<!-- le header du site -->
    <header>
        <!-- logo -->
        <div class="logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>
<!-- menu -->
        <nav id="menu">
            <?php
            wp_nav_menu(array(
                'menu' => 'menu_principal',
                'container' => 'div'
            ));
            ?>
        </nav>
<!-- icone media social -->
        <div class="social-media-icon">
            <a href="https://github.com/Guunss">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/github.svg' ?>" alt="icone github">
            </a>
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linkedin.svg' ?>" alt="icone linkedIn">
            </a>
        </div>
<!-- burger menu pour le mobile -->
        <div id="mobile-menu">
            <span class="trait"></span>
            <span class="trait"></span>
            <span class="trait"></span>
        </div>
    </header>