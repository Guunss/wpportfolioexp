<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="background"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/background.svg' ?>"
            alt="background image"></div>
    <header>

        <div class="logo">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>
        </div>

        <nav id="menu">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'menu_principal',
                    'container' => 'div'
                )
            );
            ?>
        </nav>

        <div class="social-media-icon">
            <a href="https://github.com/Guunss">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/github.svg' ?>"
                    alt="icone github">
            </a>
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linkedin.svg' ?>"
                    alt="icone linkedIn">
            </a>
        </div>

        <div id="mobile-menu">
            <span class="trait"></span>
            <span class="trait"></span>
            <span class="trait"></span>
        </div>
    </header>