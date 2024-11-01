<?php

function xl_testimonial() {
    $labels = array(
        'name' => _x('XL Testimonial', 'xl'),
        'singular_name' => _x('Testimonial', 'xl'),
        'add_new' => _x('Add New', 'xl'),
        'add_new_item' => __('Add New Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'all_items' => __('All Testimonial'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonial'),
        'not_found' => __('No testimonial found'),
        'not_found_in_trash' => __('No testimonial found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'XL Testimonial'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 8,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'capability_type' => 'post',
    );
    register_post_type('testimonial', $args);
}

add_action('init', 'xl_testimonial');
