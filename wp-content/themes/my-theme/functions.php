<?php
function theme_scripts() {
    wp_enqueue_script(
        'theme-scroller',
        get_template_directory_uri() . '/scripts/scroller.js',
        array(),
        filemtime(get_template_directory() . '/scripts/scroller.js'),
        true
    );

    wp_enqueue_script(
        'theme-navigation',
        get_template_directory_uri() . '/scripts/navigation.js',
        array(),
        filemtime(get_template_directory() . '/scripts/navigation.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts');
