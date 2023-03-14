<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'index-style', get_stylesheet_directory_uri() . '/css/index.css' );

    wp_enqueue_style( 'inner-style', get_stylesheet_directory_uri() . '/css/inner.css',array(-),time() );

    wp_enqueue_style( 'font-style', get_stylesheet_directory_uri() . '/font.css' );

    wp_enqueue_style( 'fontawesome-style', get_stylesheet_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/js/custom.js' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>