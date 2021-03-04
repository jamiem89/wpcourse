<?php

// Register custom post type

function custom_post_types() {

    // Event post type

    register_post_type('event', array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'events'),
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
        ),
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add new event',
            'edit_item' => 'Edit event',
            'all_items' => 'All events',
            'singular_name' => 'Event',
        ),
    ));

    // Program post type

    register_post_type('program', array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'programs'),
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor'
        ),
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add new program',
            'edit_item' => 'Edit program',
            'all_items' => 'All programs',
            'singular_name' => 'Program',
        ),
    ));

    // Professor post type

    register_post_type('professor', array(
        'public' => true,
        'menu_icon' => 'dashicons-nametag',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor'
        ),
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add new professor',
            'edit_item' => 'Edit professor',
            'all_items' => 'All professors',
            'singular_name' => 'Professor',
        ),
    ));
}

add_action('init', 'custom_post_types');

