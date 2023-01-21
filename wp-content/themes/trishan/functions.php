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


// Google Fonts
function triTheme_google_fonts() {
    wp_enqueue_style('triTheme_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap', false);
}
add_action('wp_enqueue_scripts', 'triTheme_google_fonts');

// Theme Functions Customize 
function triTheme_customize_register($wp_customize) {
    $wp_customize->add_section('triTheme_header_area', array(
        'title' => __('Header Area', 'trishan'),
        'description' => 'If you update your header section please do here.',
    ));

    $wp_customize->add_setting('triTheme_logo', array(
        'default' => get_bloginfo('template_directory', 'assets/images/dark-logo.png'),
    ));

    $wp_customize->add_control(new Wp_Customize_Image_Control($wp_customize, 'triTheme_logo', array(
        'label' => 'Logo Upload',
        'setting' => 'triTheme_logo',
        'description' => 'if your interested to change and update your logo please do here',
        'section' => 'triTheme_header_area',
    )));
}
add_action('customize_register', 'triTheme_customize_register');