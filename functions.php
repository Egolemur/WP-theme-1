<?php

add_theme_support('custom-logo');

function template_scripts_styles() {
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('styles', get_stylesheet_uri(), array('normalize'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'template_scripts_styles');

function enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );



