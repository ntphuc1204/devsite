<?php
function devsite_enqueue_styles() {

    // Load header.css
    wp_enqueue_style(
        'devsite-header', 
        get_template_directory_uri() . '/css/layout/header.css',
        array(),
        filemtime(get_template_directory() . '/css/layout/header.css')
    );
}

add_action('wp_enqueue_scripts', 'devsite_enqueue_styles');
wp_enqueue_style(
    'devsite-global',
    get_template_directory_uri() . '/css/style.css'
);

// Load helper BEFORE dùng
require get_template_directory() . '/inc/load_css_js_page.php';

// Load main style
function devsite_enqueue_main_style() {
    wp_enqueue_style('devsite-main', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'devsite_enqueue_main_style');

