<?php
/**
 * Plugin Name: Doctor Schedule Calendar
 * Description: Full system with Doctor availability, Patient booking, and Sub-menu dashboard.
 * Version: 1.6
 * Author: Chuwawa
 */

if (!defined('ABSPATH')) exit;

// 1. Register Doctor Post Type
add_action('init', function () {
    register_post_type('doctor', [
        'labels' => ['name' => 'Doctors', 'singular_name' => 'Doctor'],
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => ['title'],
        'show_in_menu' => true, // Ensures it appears in the sidebar
    ]);
});

// 2. Add "View Bookings" as a CHILD menu of Doctors
add_action('admin_menu', function () {
    add_submenu_page(
        'edit.php?post_type=doctor',    // Parent Slug (The Doctors Menu)
        'Patient Bookings',             // Page Title
        'View Bookings',                // Sub-menu Title
        'manage_options',               // Capability
        'doctor-bookings-list',         // Menu Slug
        'render_doctor_bookings'        // Function
    );
});

// 3. Database Table Creation (Run on Activation)
register_activation_hook(__FILE__, function() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctor_bookings';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        doctor_id mediumint(9) NOT NULL,
        patient_name varchar(100) NOT NULL,
        illness_type varchar(255) NOT NULL,
        booking_date date NOT NULL,
        start_time time NOT NULL,
        end_time time NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
});

// 4. Function to render the table in the admin
function render_doctor_bookings() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctor_bookings';
    $bookings = $wpdb->get_results("SELECT b.*, p.post_title as doctor_name FROM $table_name b LEFT JOIN {$wpdb->posts} p ON b.doctor_id = p.ID ORDER BY b.booking_date DESC");
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Appointment Bookings</h1>
        <table class="wp-list-table widefat fixed striped table-view-list" style="margin-top:20px;">
            <thead>
                <tr>
                    <th>Date</th><th>Time</th><th>Patient</th><th>Illness</th><th>Doctor</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if($bookings): foreach($bookings as $b): ?>
                <tr>
                    <td><?php echo date('M d, Y', strtotime($b->booking_date)); ?></td>
                    <td><?php echo $b->start_time; ?> - <?php echo $b->end_time; ?></td>
                    <td><?php echo esc_html($b->patient_name); ?></td>
                    <td><span style="background:#eee;padding:2px 5px;"><?php echo esc_html($b->illness_type); ?></span></td>
                    <td><?php echo esc_html($b->doctor_name); ?></td>
                    <td><a href="<?php echo admin_url('admin-ajax.php?action=delete_booking&id='.$b->id); ?>" style="color:#d63638;" onclick="return confirm('Delete this booking?')">Cancel</a></td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="6">No appointments scheduled.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

// 5. AJAX Handlers
add_action('wp_ajax_save_doctor_booking', 'handle_doctor_booking');
add_action('wp_ajax_nopriv_save_doctor_booking', 'handle_doctor_booking');
function handle_doctor_booking() {
    global $wpdb;
    $res = $wpdb->insert($wpdb->prefix . 'doctor_bookings', [
        'doctor_id'    => intval($_POST['doctor_id']),
        'patient_name' => sanitize_text_field($_POST['patient_name']),
        'illness_type' => sanitize_text_field($_POST['illness_type']),
        'booking_date' => sanitize_text_field($_POST['booking_date']),
        'start_time'   => sanitize_text_field($_POST['start_time']),
        'end_time'     => sanitize_text_field($_POST['end_time']),
    ]);
    if($res) wp_send_json_success(); else wp_send_json_error();
}

add_action('wp_ajax_delete_booking', function() {
    global $wpdb;
    $wpdb->delete($wpdb->prefix . 'doctor_bookings', ['id' => intval($_GET['id'])]);
    wp_redirect(admin_url('edit.php?post_type=doctor&page=doctor-bookings-list'));
    exit;
});

require_once plugin_dir_path(__FILE__) . 'admin/meta-box.php';
require_once plugin_dir_path(__FILE__) . 'public/shortcode.php';