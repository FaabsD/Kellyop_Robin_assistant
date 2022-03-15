<?php

/**
 * Register custom Post-types
 */
add_action('init', 'register_posttypes');

function register_posttypes() {
    register_post_type( 'FAQ', array(
        'labels' => array(
            'name'          => __( 'FAQ', THEME_TEXT_DOMAIN ),
            'singular_name' => __( 'FAQ', THEME_TEXT_DOMAIN ),
            'add_new' => __('Add FAQ', THEME_TEXT_DOMAIN),
            'add_new_item' => __('Add new FAQ', THEME_TEXT_DOMAIN),
            'all_items' => __("All FAQ's", THEME_TEXT_DOMAIN),
            'edit_item' => __('Edit FAQ', THEME_TEXT_DOMAIN),
            'name_admin_bar' => __('FAQ', THEME_TEXT_DOMAIN),
            'menu_name' => __('FAQ', THEME_TEXT_DOMAIN),
            'new_item' => __('New FAQ', THEME_TEXT_DOMAIN),
            'not_found' => __("No FAQ's found", THEME_TEXT_DOMAIN),
            'not_found_in_trash' => __("No FAQ's found in trash", THEME_TEXT_DOMAIN),
            'search_items' => __('Search FAQ', THEME_TEXT_DOMAIN),
            'view_item' => __('View FAQ', THEME_TEXT_DOMAIN),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'rewrite' => array('with_front' => true),
        'supports' => array('title', 'editor'),
        'show_in_rest' => false,
    ) );
}
