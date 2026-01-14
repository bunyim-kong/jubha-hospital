<?php
function theme_scripts() {
    wp_enqueue_script(
        'theme-scroller',
        get_template_directory_uri() . '/scripts/scroller.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts');
