<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/pages/contact.css"/>

<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="">Home</a> / Contact</span>
    <h1 class="">Contact us</h1>
</div>

<section class="contact-section container">
    <div class="booking-flex-container">
        
        <div class="doctor-section">
            <h5>For inquiries or appointments,</h5>
            <div class="call">call our care center at:</div>
            <a href="tel:920033440" class="contact-number-big"><i class="fas fa-phone"></i> 920033440</a>
            
            <div class="seperator">
                <span>OR</span>
            </div>
            
            <a class="appointment-btn" href="<?php echo home_url('doctor-schedule'); ?>" target="_blank">
                Book An Appointment
            </a>
        </div>

        <div class="app-section">
            <div class="download-content">
                <h4>Download Almana Hospital’s New App for better Patient Experience.</h4>
                <div class="apps-qr-wrapper">
                    <a href="https://apps.apple.com/us/app/almana-hospital/id1587010153" target="_blank">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/almana-hospital-appstore-qr.svg" alt="App Store">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.almanadoctorsapp&pli=1" target="_blank">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/almana-hospital-playstore-qr.svg" alt="google-play">
                    </a>

                    
                </div>
            </div>

            <div class="mobile-mockup">
                <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/mobile-popa/pop_mobile_1.png" alt="Mobile App">
            </div>
        </div>
    </div>

</section>

<section class="contact-form-section">
    <div class="container">
        <p class="form-intro-text">For any suggestions or complaints, please fill out the form below.</p>

        <form class="contact-form-area" id="contactForm">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select" id="drpRequest" name="request" required>
                        <option value="" disabled selected>Type of Request</option>
                        <option value="complaint">Complaint</option>
                        <option value="suggestion">Suggestion</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <input class="cnt-input" type="text" name="title" placeholder="Subject" required>
                </div>

                <div class="col-md-6">
                    <input class="cnt-input" type="text" name="name" placeholder="Full Name" required>
                </div>

                <div class="col-md-6">
                    <input class="cnt-input" type="email" name="email" placeholder="Email Address *" required>
                </div>

                <div class="col-md-6">
                    <input class="cnt-input" type="tel" name="phone" placeholder="Phone Number *" required>
                </div>

                <div class="col-md-6">
                    <select class="form-select" id="drpLocation" name="location" required>
                        <option value="" disabled selected>Select Location</option>
                        <option value="Khobar">Khobar</option>
                        <option value="Dammam">Dammam</option>
                    </select>
                </div>

                <div class="col-full">
                    <textarea class="cnt-text-area" id="txtComment" placeholder="Your Message" name="comment" required></textarea>
                </div>

                <div class="col-full submit-container">
                    <button id="submitBtn" class="appointment-btn" type="submit">
                        Submit Request
                    </button>
                    <div class="captcha-txt">
                        <p>*This form is protected by invisible reCAPTCHA</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<?php get_footer(); ?>