<?php

/**
 * Register custom Post-types
 */
add_action('init', 'register_posttypes');

function register_posttypes() {
    /*register_post_type( '', array(
        'labels' => array(
            'name'          => __( '', THEME_TEXT_DOMAIN ),
            'singular_name' => __( '', THEME_TEXT_DOMAIN ),
            'add_new' => __('Add ', THEME_TEXT_DOMAIN),
            'add_new_item' => __('Add new ', THEME_TEXT_DOMAIN),
            'all_items' => __('All ', THEME_TEXT_DOMAIN),
            'edit_item' => __('Edit ', THEME_TEXT_DOMAIN),
            'name_admin_bar' => __('', THEME_TEXT_DOMAIN),
            'menu_name' => __('', THEME_TEXT_DOMAIN),
            'new_item' => __('New ', THEME_TEXT_DOMAIN),
            'not_found' => __('No  found', THEME_TEXT_DOMAIN),
            'not_found_in_trash' => __('No  found in trash', THEME_TEXT_DOMAIN),
            'search_items' => __('Search ', THEME_TEXT_DOMAIN),
            'view_item' => __('View ', THEME_TEXT_DOMAIN),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => '',
        'rewrite' => array('with_front' => true),
        'supports' => array(),
        'show_in_rest' => false,
    ) );*/
}
