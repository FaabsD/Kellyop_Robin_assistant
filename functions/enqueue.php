<?php
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_styles()
{
    wp_enqueue_style('Robin_assists_style', get_template_directory_uri() . '/build/css/app.css');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
    wp_enqueue_script('app', THEME_URL . '/build/scripts/app.js', array(), theme_version(), true);

    //localise THEME_URL to use in script
    $localize = array('theme_url' => THEME_URL);

    wp_localize_script('app', 'directory_uri', $localize);
}

function theme_version()
{
    return wp_get_theme()->get('Version');
}
