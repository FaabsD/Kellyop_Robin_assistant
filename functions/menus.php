<?php

/**
 * Add custom menus to the theme
 *
 */
add_action('init', 'register_menus');

function register_menus() {
    register_nav_menus(
        array(
            'main_menu' => __('Hoofdmenu', 'Robin Assists'),
        )
    );
    error_log('register menus');
}