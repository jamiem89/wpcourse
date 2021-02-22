<?php

// Enqueue styles

function university_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // Check if we're developing locally
    // Strstr checks for a string within another string
    if(strstr($_SERVER['SERVER_NAME'], 'localhost')) {
        wp_enqueue_script('js', 'http://localhost:3000/bundled.js', null, '1.0', true);
    }
    else {
        wp_enqueue_script('vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), null, '1.0', true);
        wp_enqueue_script('js', get_theme_file_uri('/bundled-assets/scripts.bc49dbb23afb98cfc0f7.js'), null, '1.0', true);
        wp_enqueue_style('styles', get_theme_file_uri('/bundled-assets/styles.bc49dbb23afb98cfc0f7.css'));
    }
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerExploreMenu', 'Footer Explore Menu');
    register_nav_menu('footerLearnMenu', 'Footer Learn Menu');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
