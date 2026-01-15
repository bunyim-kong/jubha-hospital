<?php
/*
Plugin Name: My Plugin
Description: Add menu to wp-admin sidebar
Version: 1.0
Author: Neath
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Security: block direct access
}

/**
 * Add plugin menu to wp-admin sidebar
 */
function my_plugin_add_admin_menu() {
    add_menu_page(
        'Booking appionment',        // Page title
        'Booking appionment',             // Sidebar menu title
        'manage_options',        // Permission
        'my-plugin',             // Menu slug
        'my_plugin_admin_page',  // Callback
        'dashicons-buddicons-replies', // Icon
        25                       // Position
    );
}
add_action( 'admin_menu', 'my_plugin_add_admin_menu' );
function my_plugin_admin_page() {
}


