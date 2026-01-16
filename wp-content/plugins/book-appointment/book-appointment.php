<?php
/**
 * Plugin Name: Book Appointment
<<<<<<< HEAD
 * Description: You can book an appointment through this plugin.
=======
 * Description: Appointment booking system
>>>>>>> 2a19547 (appoinment : create patient docter and appoinment)
 * Version: 1.0.0
 * Author: neath
 */

<<<<<<< HEAD
if (!defined('ABSPATH')) {
    exit;
}

/*--------------------------------------------------------------
# Create Database Table
--------------------------------------------------------------*/
register_activation_hook(__FILE__, 'book_create_appointments_table');

function book_create_appointments_table() {
    global $wpdb;

    $table = $wpdb->prefix . 'appointments';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        patient_name VARCHAR(255) NOT NULL,
        phone VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        dob DATE NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

/*--------------------------------------------------------------
# Admin Menu
--------------------------------------------------------------*/
add_action('admin_menu', 'book_add_menu');
=======
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'admin_menu', 'book_add_menu' );
>>>>>>> 2a19547 (appoinment : create patient docter and appoinment)

function book_add_menu() {

    // Main menu
    add_menu_page(
        'Booking Appointment',
        'Appointment',
        'manage_options',
        'book-appointment',
        'book_appointment_page',
        'dashicons-calendar',
<<<<<<< HEAD
        25
    );

    add_submenu_page(
        'book-appointment',
        'Book Appointments',
        'Patient',
        'manage_options',
        'book-all-appointments',
        'book_all_appointments_page'
    );

    add_submenu_page(
        'book-appointment',
        'Make Schedule',
        'Doctor',
        'manage_options',
        'book-appointment-settings',
        'book_appointment_settings_page'
    );
}

/*--------------------------------------------------------------
# Pages
--------------------------------------------------------------*/
=======
        6
    );

    // Patient submenu
    add_submenu_page(
        'book-appointment',
        'Patients',
        'Patients',
        'manage_options',
        'book-patients',
        'book_patients_page'
    );

    // Doctor submenu
    add_submenu_page(
        'book-appointment',
        'Doctors',
        'Doctors',
        'manage_options',
        'book-doctors',
        'book_doctors_page'
    );

    // Appointment submenu
    add_submenu_page(
        'book-appointment',
        'Appointments',
        'Appointments',
        'manage_options',
        'book-appointments',
        'book_appointments_page'
    );
}

/* ---------- Page Callbacks ---------- */

>>>>>>> 2a19547 (appoinment : create patient docter and appoinment)
function book_appointment_page() {
    echo '<div class="wrap"><h1>Dashboard</h1><p>Appointment overview.</p></div>';
}

<<<<<<< HEAD
function book_all_appointments_page() {

    if (isset($_GET['success'])) {
        echo '<div class="notice notice-success"><p>Patient registered successfully.</p></div>';
    }

    echo '<form class="patient-form" method="POST" action="' . admin_url('admin-post.php') . '">

        <input type="hidden" name="action" value="save_appointment">

        <div class="input-field" style="margin-bottom: 14px; margin-top: 14px;">
            <label><i class="fas fa-user"></i> Full Name</label>
            <input type="text" name="patient_name" placeholder="Enter your name" required>
        </div>

        <div class="input-field" style="margin-bottom: 14px;">
            <label><i class="fas fa-phone"></i> Phone Number</label>
            <input type="tel" name="phone" placeholder="05x xxx xxxx" required>
        </div>

        <div class="input-field" style="margin-bottom: 14px;">
            <label><i class="fas fa-envelope"></i> Email Address</label>
            <input type="email" name="email" placeholder="name@example.com" required>
        </div>

        <div class="input-field" style="margin-bottom: 14px;">
            <label><i class="fas fa-calendar-alt"></i> Date of Birth</label>
            <input type="date" name="dob" required>
        </div>

        <div class="submit-field">
            <button type="submit" class="patient-form-btn">
                <span>Register</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>

    </form>';
}

function book_appointment_settings_page() {
    echo '<h1>Doctor Schedule</h1>';
    echo '<p>Doctor scheduling will be added here.</p>';
}

/*--------------------------------------------------------------
# Save Appointment
--------------------------------------------------------------*/
add_action('admin_post_save_appointment', 'book_save_appointment');

function book_save_appointment() {

    if (!current_user_can('manage_options')) {
        wp_die('Unauthorized access');
    }

    global $wpdb;
    $table = $wpdb->prefix . 'appointments';

    $wpdb->insert(
        $table,
        [
            'patient_name' => sanitize_text_field($_POST['patient_name']),
            'phone'        => sanitize_text_field($_POST['phone']),
            'email'        => sanitize_email($_POST['email']),
            'dob'          => sanitize_text_field($_POST['dob']),
        ],
        ['%s', '%s', '%s', '%s']
    );

    wp_redirect(admin_url('admin.php?page=book-all-appointments&success=1'));
    exit;
}
=======
function book_patients_page() {
    echo '<div class="patien-form">
    <section class="patien-form" style="display:block">
  <form method="post">
    <div class="input_forn" style="margin-top: 40px;display: flex;align-items: center; "> 
    <label style="font-size:14px;">Phone</label>
    <input type="text" name="patient_phone" required>
    <label style="margin-left:20px">Doctor</label>
    <select name="doctor" required style="font-size:14px;">
      <option value="">Select Doctor</option>
      <option>Doctor MONY</option>
      <option>Doctor</option>
    </select>
    <label style="margin-left:20px;">Date</label>
    <input type="date" name="appointment_date" required>

    <label style="margin-left:20px;">Time</label>
    <input type="time" name="appointment_time" required>

    <button type="submit" style="margin-left:20px;">Book Appointment</button>
     </div>
     </div>
  </form>
</section>
    </div>';
}
function book_doctors_page() {
    echo '<div class="wrap"><h1>Doctors</h1><p>Manage doctors here.</p></div>';
}

function book_appointments_page() {
    echo '<div class="wrap"><h1>Appointments</h1><p>Manage appointments here.</p></div>';
}


>>>>>>> 2a19547 (appoinment : create patient docter and appoinment)
