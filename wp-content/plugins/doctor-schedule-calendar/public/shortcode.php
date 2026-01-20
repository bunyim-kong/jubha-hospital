<?php
add_shortcode('doctor_calendar', function($atts) {
    global $wpdb;
    $atts = shortcode_atts(['id' => 'all'], $atts);
    wp_enqueue_script('fullcalendar', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js');

    $doctors = new WP_Query(['post_type' => 'doctor', 'posts_per_page' => -1]);
    $events = [];

    // 1. Doctor Availability (Colored Layers)
    if ($doctors->have_posts()) {
        $colors = ['#3788d8', '#28a745', '#ffc107', '#17a2b8', '#6f42c1'];
        $i = 0;
        while ($doctors->have_posts()) {
            $doctors->the_post();
            $id = get_the_ID();
            $dname = get_the_title();
            $schedule = get_post_meta($id, '_doctor_schedule', true);
            $color = $colors[$i % count($colors)];
            $i++;

            if (is_array($schedule)) {
                $day_map = ['Sunday'=>[0],'Monday'=>[1],'Tuesday'=>[2],'Wednesday'=>[3],'Thursday'=>[4],'Friday'=>[5],'Saturday'=>[6]];
                foreach ($schedule as $day => $data) {
                    if (empty($data['off']) && !empty($data['start'])) {
                        $events[] = [
                            'title' => $dname,
                            'daysOfWeek' => $day_map[$day],
                            'startTime' => $data['start'],
                            'endTime' => $data['end'],
                            'backgroundColor' => $color,
                            'borderColor' => $color,
                            'extendedProps' => ['is_booking' => false, 'doctor_id' => $id, 'raw_start' => $data['start'], 'raw_end' => $data['end']]
                        ];
                    }
                }
            }
        }
        wp_reset_postdata();
    }

    // 2. Occupied Bookings (Black Layers)
    $table_name = $wpdb->prefix . 'doctor_bookings';
    $bookings = $wpdb->get_results("SELECT * FROM $table_name");
    foreach ($bookings as $b) {
        $events[] = [
            'title' => '❌ OCCUPIED (' . $b->illness_type . ')',
            'start' => $b->booking_date . 'T' . $b->start_time,
            'end'   => $b->booking_date . 'T' . $b->end_time,
            'color' => '#000000',
            'extendedProps' => ['is_booking' => true]
        ];
    }

    ob_start(); ?>
    <div id="doctor-calendar"></div>

    <div id="bookingModal" class="booking-modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3 style="margin-top:0;">Book Appointment</h3>
            <p id="time-hint" style="font-size: 13px; color: #d9534f; font-weight: bold;"></p>
            
            <form id="appointmentForm">
                <input type="hidden" name="action" value="save_doctor_booking">
                <input type="hidden" id="doctorId" name="doctor_id">
                <input type="hidden" id="bookingDate" name="booking_date">

                <div class="form-group"><label>Doctor</label><input type="text" id="targetDoctor" readonly style="background:#f0f0f0"></div>
                <div class="form-group"><label>Your Name</label><input placeholder="Your name" type="text" name="patient_name" required></div>
                
                <div class="form-group">
                    <label>Type of Illness</label>
                    <select name="illness_type" required style="width:100%; padding:14px 10px; border-radius:5px; border:1px solid #ddd;">
                        <option value="">-- Select Illness --</option>
                        <option value="Respiratory Therapy">Respiratory Therapy</option>
                        <option value="Anesthesiology">Anesthesiology</option>
                        <option value="Cardiac Surgery">Cardiac Surgery</option>
                        <option value="Physical Therapy">Physical Therapy</option>
                        <option value="Cath Lab">Cath Lab</option>
                        <option value="Emergency">Emergency</option>
                        <option value="Endoscopy">Endoscopy</option>
                        <option value="Intensive Care Unit">Intensive Care Unit</option>
                        <option value="Nursery">Nursery</option>
                        <option value="Pathology & Laboratory">Pathology & Laboratory</option>
                    </select>
                </div>

                <div class="form-group" style="display:flex; gap:10px;">
                    <div style="flex:1;"><label>Start</label><input type="time" id="pStart" name="start_time" required></div>
                    <div style="flex:1;"><label>End</label><input type="time" id="pEnd" name="end_time" required></div>
                </div>
                <button type="submit" id="submitBtn" class="book-btn">Confirm Booking</button>
            </form>
        </div>
    </div>

    <style>
        #doctor-calendar { width: 100%; min-height: 700px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .booking-modal { display: none; position: fixed; z-index: 99999; left: 0; top: 0; width: 100%; height: 100%; background: rgba(85, 68, 68, 0.7); }
        .modal-content { background: #fff; margin: 5% auto; padding: 30px; border-radius: 12px; width: 90%; max-width: 400px; position: relative; }
        .close-button { position: absolute; right: 20px; top: 15px; font-size: 28px; cursor: pointer; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .book-btn { width: 100%; padding: 12px; background: #00A4A3; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; transition: all .3s ease;}
        .book-btn:hover { background: #003D4D; }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById("bookingModal");
        var form = document.getElementById('appointmentForm');
        var limitS, limitE;

        var calendar = new FullCalendar.Calendar(document.getElementById('doctor-calendar'), {
            initialView: 'timeGridWeek',
            slotMinTime: '07:00:00',
            allDaySlot: false,
            events: <?php echo json_encode($events); ?>,
            eventClick: function(info) {
                if (info.event.extendedProps.is_booking) { alert("This slot is already booked."); return; }
                form.reset();
                modal.style.display = "block";
                document.getElementById('targetDoctor').value = info.event.title;
                document.getElementById('doctorId').value = info.event.extendedProps.doctor_id;
                
                let d = info.event.start;
                document.getElementById('bookingDate').value = d.getFullYear() + '-' + ('0' + (d.getMonth() + 1)).slice(-2) + '-' + ('0' + d.getDate()).slice(-2);
                
                limitS = info.event.extendedProps.raw_start;
                limitE = info.event.extendedProps.raw_end;
                document.getElementById('time-hint').innerText = "Doctor Hours: " + limitS + " - " + limitE;
                document.getElementById('pStart').value = limitS;
            }
        });
        calendar.render();

        form.onsubmit = function(e) {
            e.preventDefault();
            let startVal = document.getElementById('pStart').value;
            let endVal = document.getElementById('pEnd').value;

            if (startVal < limitS || endVal > limitE || startVal >= endVal) {
                alert("Please select a time between " + limitS + " and " + limitE);
                return;
            }

            fetch('<?php echo admin_url('admin-ajax.php'); ?>', { method: 'POST', body: new FormData(form) })
            .then(res => res.json()).then(data => {
                if(data.success) { alert("Booked!"); location.reload(); }
                else { alert("Error: " + data.data); }
            }).catch(err => alert("System Error"));
        };
        document.querySelector(".close-button").onclick = function() { modal.style.display = "none"; }
    });
    </script>
    <?php
    return ob_get_clean();
});