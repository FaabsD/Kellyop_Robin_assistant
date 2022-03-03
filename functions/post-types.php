<?php

/**
 * Register custom Post-types
 */
add_action('init', 'register_posttypes');

function register_posttypes() {
    /*register_post_type( '', array(
        'labels' => array(
            'name'          => __( '', '' ),
            'singular_name' => __( '', '' ),
            'add_new' => __('Add ', ''),
            'add_new_item' => __('Add new ', ''),
            'all_items' => __('All ', ''),
            'edit_item' => __('Edit ', ''),
            'name_admin_bar' => __('', ''),
            'menu_name' => __('', ''),
            'new_item' => __('New ', ''),
            'not_found' => __('No found', ''),
            'not_found_in_trash' => __('No found in trash', ''),
            'search_items' => __('Search ', ''),
            'view_item' => __('View '),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => '',
        'rewrite' => array('with_front' => true),
        'supports' => array(),
        'show_in_rest' => false,
    ) );*/
}
