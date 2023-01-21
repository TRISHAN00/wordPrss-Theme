<?php

/*
* My Theme Functions    
*/

// Theme Title
add_theme_support('title-tag');

// Theme CSS Jquery Files Calling
function add_theme_css_jquery_files() {
    // CSS
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/bootstrap.min.css',  array(), '4.0.0', 'all');
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'tri-style', get_stylesheet_uri());

    // jQeury
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/assets/lib/bootstrap/bootstrap.min.js' , array(), '4.0.0', true );
}
add_action('wp_enqueue_scripts', 'add_theme_css_jquery_files');
