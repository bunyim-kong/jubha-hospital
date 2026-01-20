<?php
add_shortcode('doctor_calendar', function($atts) {
    $atts = shortcode_atts(['id' => 'all'], $atts);
    wp_enqueue_script('fullcalendar', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js');

    $args = ['post_type' => 'doctor', 'posts_per_page' => -1];
    if ($atts['id'] !== 'all') { $args['p'] = intval($atts['id']); }

    $doctors = new WP_Query($args);
    $events = [];

    if (!function_exists('get_doctor_color')) {
        function get_doctor_color($id) {
            $colors = ['#3788d8', '#28a745', '#dc3545', '#ffc107', '#6f42c1', '#fd7e14', '#20c997', '#17a2b8'];
            return $colors[$id % count($colors)];
        }
    }

    if ($doctors->have_posts()) {
        while ($doctors->have_posts()) {
            $doctors->the_post();
            $id = get_the_ID();
            $doctor_name = get_the_title();
            $schedule = get_post_meta($id, '_doctor_schedule', true);
            $doctor_color = get_doctor_color($id);

            if ($schedule && is_array($schedule)) {
                $day_map = ['Sunday'=>[0],'Monday'=>[1],'Tuesday'=>[2],'Wednesday'=>[3],'Thursday'=>[4],'Friday'=>[5],'Saturday'=>[6]];
                foreach ($schedule as $day => $data) {
                    if (empty($data['off']) && !empty($data['start']) && !empty($data['end'])) {
                        $events[] = [
                            'title'           => $doctor_name,
                            'daysOfWeek'      => $day_map[$day],
                            'startTime'       => $data['start'],
                            'endTime'         => $data['end'],
                            'backgroundColor' => $doctor_color,
                            'borderColor'     => $doctor_color,
                            'extendedProps'   => [
                                'raw_start' => $data['start'],
                                'raw_end'   => $data['end']
                            ]
                        ];
                    }
                }
            }
        }
        wp_reset_postdata();
    }

    ob_start(); ?>
    
    <div id="doctor-calendar" style="width: 100%;"></div>

    <div id="bookingModal" class="booking-modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3 style="margin-top:0;">Book Appointment</h3>
            <p id="time-hint" style="font-size: 13px; color: #d9534f; font-weight: bold;"></p>
            
            <form id="appointmentForm">
                <div class="form-group">
                    <label>Doctor</label>
                    <input type="text" id="targetDoctor" readonly style="background:#f0f0f0">
                </div>

                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="patient_name" required placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label>Pick Your Time (AM/PM)</label>
                    <input type="time" id="patientTime" name="patient_time" required>
                </div>

                <div class="form-group">
                    <label>Specialty</label>
                    <select name="specialist_type" required>
                        <option value="General">General Consultation</option>
                    </select>
                </div>

                <button type="submit" class="book-btn">Confirm Booking</button>
            </form>
        </div>
    </div>

    <style>
        #doctor-calendar { width: 100%; min-height: 700px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .fc-event { cursor: pointer !important; }
        .booking-modal { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); }
        .modal-content { background: #fff; margin: 10% auto; padding: 30px; border-radius: 12px; width: 90%; max-width: 400px; position: relative; }
        .close-button { position: absolute; right: 20px; top: 15px; font-size: 28px; cursor: pointer; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; font-size: 14px; }
        .form-group input, .form-group select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 16px; }
        .book-btn { width: 100%; padding: 14px; background: #007bff; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById("bookingModal");
        var calendarEl = document.getElementById('doctor-calendar');
        var limitStart, limitEnd;

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            slotMinTime: '07:00:00',
            slotMaxTime: '21:00:00',
            allDaySlot: false,
            height: 'auto',
            // 12-hour AM/PM format for the sidebar and slots
            slotLabelFormat: { hour: 'numeric', minute: '2-digit', omitZeroMinute: false, meridian: 'short' },
            eventTimeFormat: { hour: 'numeric', minute: '2-digit', meridian: 'short' },
            
            events: <?php echo json_encode($events); ?>,
            
            eventClick: function(info) {
                modal.style.display = "block";
                document.getElementById('targetDoctor').value = info.event.title;
                
                // Save the doctor's limits for validation
                limitStart = info.event.extendedProps.raw_start;
                limitEnd = info.event.extendedProps.raw_end;

                // Show the patient a hint of when the doctor is free
                const formatTime = (t) => {
                    let [h, m] = t.split(':');
                    let ampm = h >= 12 ? 'PM' : 'AM';
                    h = h % 12 || 12;
                    return `${h}:${m} ${ampm}`;
                };

                document.getElementById('time-hint').innerText = 
                    "Doctor is free from " + formatTime(limitStart) + " to " + formatTime(limitEnd);
                
                // Set the default time in the input to the shift start
                document.getElementById('patientTime').value = limitStart;
            }
        });

        calendar.render();

        // VALIDATION LOGIC
        document.getElementById('appointmentForm').onsubmit = function(e) {
            e.preventDefault();
            let chosenTime = document.getElementById('patientTime').value;

            // Check if the chosen time is within the doctor's shift
            if (chosenTime < limitStart || chosenTime > limitEnd) {
                alert("Please pick a time between " + limitStart + " and " + limitEnd);
                return;
            }

            alert("Booking Confirmed for " + document.getElementById('targetDoctor').value + " at " + chosenTime);
            modal.style.display = "none";
        };

        document.querySelector(".close-button").onclick = function() { modal.style.display = "none"; }
        window.onclick = function(event) { if (event.target == modal) { modal.style.display = "none"; } }
    });
    </script>
    <?php
    return ob_get_clean();
});