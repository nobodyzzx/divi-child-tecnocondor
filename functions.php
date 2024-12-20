<?php
// Heredar los estilos del tema padre
function divi_child_enqueue_styles() {
    wp_enqueue_style('divi-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('divi-child-style', get_stylesheet_directory_uri() . '/style.css', array('divi-parent-style'));
}
add_action('wp_enqueue_scripts', 'divi_child_enqueue_styles');
