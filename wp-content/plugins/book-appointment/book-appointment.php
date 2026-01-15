<?php
/**
 * Plugin Name: Book Appointment
 * Description: You can book an appointment through this plugin. It allows users to select a date and time for their appointment and submit their details.
 * Version: 1.0.0
 * Author: Bunyim
 */

add_action('admin_menu', 'book_add_menu');

function book_add_menu() {

    add_menu_page(
        'Booking Appointment',      // Page title
        'Doctor',                   // Menu title
        'manage_options',           // Capability
        'book-appointment',         // Menu slug
        'book_appointment_page',    // Callback
        'dashicons-calendar',       // Icon
        '6'
    );
}

function book_appointment_page() {
    echo '<h1>Book Appointment</h1>';
    echo '<p>This is where your booking system will go.</p>';
}
