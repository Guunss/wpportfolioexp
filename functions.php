<?php

//ajout support logo dans le thème
add_theme_support( 'custom-logo');
function enqueue_assets() {

    wp_enqueue_style('default-style', get_stylesheet_uri() );     
    wp_enqueue_style('theme-style', get_template_directory_uri() .'/assets/css/main.css') ;
   
    wp_enqueue_style('swiper-style', get_template_directory_uri()  .'/node_modules/swiper/swiper-bundle.min.css');     
    wp_enqueue_script('swiper-js', get_template_directory_uri() .'/node_modules/swiper/swiper-bundle.min.js') ;
    wp_enqueue_script('swiper-js-portfolio', get_template_directory_uri() .'/assets/JS/swiper.js') ;
   
}
add_action('wp_enqueue_scripts', 'enqueue_assets');
?>