<?php

// Register custom post type

function custom_post_types() {
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
}

add_action('init', 'custom_post_types');

