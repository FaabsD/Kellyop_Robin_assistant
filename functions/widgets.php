<?php
/**
 * register custom widgets
 */
add_action('init', 'register_widgets');

function register_widgets()
{
    register_sidebar(array(
        'name'          => 'Header menu section',
        'id'            => 'header_menu_section',
        'before_widget' => '<div class="header__menu-section">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
