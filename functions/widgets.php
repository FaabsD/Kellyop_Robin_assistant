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

//    Register multiple footer widgets
    $footer_widgets = array(
        array(
            'name'          => 'Footer content 1',
            'id'            => 'footer-content-1',
            'before_widget' => '<div class="footer-content footer-content-1">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ),
        array(
            'name'          => 'Footer content 2',
            'id'            => 'footer-content-2',
            'before_widget' => '<div class="footer-content footer-content-2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ),
        array(
            'name'          => 'Footer content 3',
            'id'            => 'footer-content-3',
            'before_widget' => '<div class="footer-content footer-content-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ),
    );
    foreach ($footer_widgets as $args) {
        register_sidebar($args);
    }
}
