<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/pages/hospital.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / <a href="<?php echo home_url('hospital-and-clinic'); ?>">Hospital and Clinic</a> / AMC Rakkah</span>
    <h1 class="">AGH Aziziah Dammam </h1>
</div>

<section class="hospital-section container">
    
    <section class="hero">
        <div class="hero-slide">
            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/DSC06581.jpg">

            <div class="hero-overlay">
                <h2>AGH Aziziah Dammam </h2>

                <a class="appointment-btn" href="#">Book an Appointment</a>
            </div>
        </div>
    </section>

    <!-- COUNTERS -->
    <section class="counter-content">
        <div class="counter left-corner">
            <i class="fa-solid fa-users"></i>
            <h3>900</h3>
            <p>Workforce</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-user-doctor"></i>
            <h3>100</h3>
            <p>Doctors</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>50</h3>
            <p>Beds</p>
        </div>

        <div class="counter right-corner">
            <i class="fa-solid fa-house-chimney-medical"></i>
            <h3>74</h3>
            <p>Clinics</p>
        </div>
    </section>


    <!-- TABS -->
    <section class="tabs">
        <input type="radio" name="tab" id="tab1" checked>
        <input type="radio" name="tab" id="tab2">
        <input type="radio" name="tab" id="tab3">
        <input type="radio" name="tab" id="tab4">
        <input type="radio" name="tab" id="tab5">

        <!-- category-tab -->
        <div class="tab-buttons">
            <label for="tab1">Overview</label>
            <label for="tab2">Medical Director</label>
            <label for="tab3">Working Hours</label>
            <label for="tab4">Doctors</label>
            <label for="tab5">Location</label>
        </div>
        
        <div class="tab-content">
            <!-- overview -->
            <div class="content overview">
                <p>
                    <strong>The brand-new hospital facility located in Aziziah is now open for patients. Currently equipped with 31 clinics and 50 beds, the hospital will grow to 52 clinics and 185 beds by 2024.</strong> <BR></BR>
                   Located in the northeast of Dammam, the new hospital is equipped with a comprehensive 24/7 emergency room (ER) that is easily accessible for patients, visitors, and ambulances covering all services.. <BR></BR>

                    The hospital has 20 outpatient clinics open between the hours of 8.00 am to 8.00 pm - These outpatient clinics include Internal Medicine, General Surgery, Pediatric, OB-GYN, Orthopedic, Cardiology, Urology, and Pre-Anesthesia.<BR></BR>

                    The new Laboratory and Pathology Department offers a comprehensive and wide variety of tests and services with qualified staff available 24/7 to assist physicians in diagnosing, establishing a prognosis, and detecting disease through screening, managing, and monitoring patients. The department provides routine laboratory services, STAT laboratory services, and point-of-care testing (POCT).<BR></BR>

                    Radiology is a crucial medical specialty at Aziziah Dammam Hospital, utilizing advanced imaging technology to diagnose internal diseases accurately.<BR></BR>

                    Our team of highly skilled Radiologists, Technologists, and nursing/healthcare staff work collaboratively to provide a comprehensive range of services, both routinely and in emergencies. These include general radiology, CT scans, ultrasound, and MRI, ensuring timely and accurate diagnoses to support optimal patient care. <BR></BR>

                    Aziziah Dammam Hospital will also feature state-of-the-art medical imaging and radiology equipment. In addition, the hospital will house the latest technologically advanced robotic equipment, including a fully automated robotic pharmacy that dispenses medication, effectively minimizing human errors and reducing wait times. This integration of cutting-edge technology further reinforces our commitment to providing advanced and efficient healthcare services to our patients. <br>
                    Patients visiting Aziziah Dammam Hospital can expect the highest standard of care reflected across every hospital with Almana Group of Hospitals and the team of 960 healthcare professionals are dedicated to ensuring that you receive personalized care and attention throughout your stay.
                </p>
            </div>

            <!-- medical director -->
            <div class="content medical-director container">
                <div class="director-container">

                    <div class="director-image">
                       <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/medical-director-700281/Dr._Saleh_Nasser_Alahmed.png" alt="Dr. Saleh Nasser Alahmed  ">
                                            </div>

                    <div class="director-content">
                        <h2>Dr. Saleh Nasser Alahmed </h2>

                        <span class="director-title">Medical Director</span>

                        <p class="intro">
                           Dr. Saleh Alahmed is a highly experienced medical professional with an impressive background in internal medicine, adult endocrinology, and clinical thyroidology. Currently serving as the Hospital and Medical Director at Almana General Hospital in Aziziyah, Saudi Arabia. Dr. Saleh Alahmed has spent over 27 years dedicated to the medical field.
                        </p>

                        <p>
                            He began his academic journey by earning a Bachelor of Medicine and Surgery from King Saud University in Riyadh, Saudi Arabia, before pursuing advanced training in various areas of medicine. Dr. Saleh Alahmed has obtained a Clinical Thyroidology Fellowship in Thyroid Disorders and Tumors from the esteemed University of Toronto, as well as a Saudi Specialty Certificate in Endocrinology and Metabolism, Adult Endocrinology, and Internal Medicine from the Saudi Commission of Health Specialties in Saudi Arabia. These academic achievements are a testament to Dr. Saleh Alahmed's commitment to providing the highest level of care to his patients, and his expertise has made him a trusted authority in the medical community.
                        </p>

                        <p>
                           Throughout his illustrious medical career, Dr.Saleh Alahmed has actively participated in and attended various local and international symposiums, conferences, and workshops in various capacities such as presenter, chairman, and delegate. His most recent engagement involved chairing the Thyroid Roadmap Scientific Event - Clinical Cases Solving in Dammam, KSA, and taking part in the Diabetes and Diabetic Foot Challenges and Updates Conference in Hofuf, KSA.
                        </p>

                        <p>
                           Dr.Saleh Alahmed's extensive participation in these events showcases his dedication to continuous learning and professional development. With over ten professional affiliations, Dr.Saleh Alahmed is a distinguished member of several reputable medical organizations, including the American Association of Clinical Endocrinologists and the Endocrine Society, reflecting his deep commitment to the medical profession and his pursuit of excellence in patient care.
                        </p>
                    </div>

                </div>
            </div>

            <!-- working hours -->
            <div class="content working-hours">
                <div class="card-wrapper">
                    <div class="hour-card">
                        <span>Out Patient Clinics “OPD”</span>

                        <div class="card-cols">
                            <span>1st Shift </span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 10:00 PM</span>
                        </div>
                    </div>

                    <div class="hour-card">
                        <span>Pharmacies</span>

                        <div class="card-cols">
                            <span>1st Shift</span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 10:00 PM</span>
                        </div>
                    </div>

                    <div class="hour-card">
                        <span>Head Office</span>

                        <div class="card-cols">
                            <span> Monday - Sunday </span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- doctors -->
            <div class="content doctors-list">
                <div class="doctor-wrapper">
                    <div class="doctor-card">

                        <div class="doctor-info">
                            <h3>Adel Suleiman Raslan</h3>
                            <span><i class="fas fa-map-marker-alt"></i> AMC Rakkah</span>
                            <p>Dermatology & Aesthetic Medicine</p>

                            <a href="">Make Appointment<i class="far fa-calendar-check"></i></a>
                        </div>
                    </div>

                    <div class="doctor-card">
                        <img src="<?php echo get_template_directory_uri() . '/asset/doctors/doctor-2.jpg'; ?>" alt="">

                        <div class="doctor-info">
                            <h3>Taleb Barakat Al-Hassan</h3>
                            <span><i class="fas fa-map-marker-alt"></i> AMC Rakkah</span>
                            <p>Dermatology, Consultant</p>

                            <a href="">Make Appointment<i class="far fa-calendar-check"></i></a>
                        </div>
                    </div>

                    <div class="doctor-card">
                        <img src="<?php echo get_template_directory_uri() . '/asset/doctors/doctor-3.jpg'; ?>" alt="">

                        <div class="doctor-info">
                            <h3>Abeer Aboelenin</h3>
                            <span><i class="fas fa-map-marker-alt"></i> AMC Rakkah</span>
                            <p>Dermatology, Specialist</p>

                            <a href="">Make Appointment<i class="far fa-calendar-check"></i></a>
                        </div>
                    </div>

                    <div class="doctor-card">
                        <img src="<?php echo get_template_directory_uri() . '/asset/doctors/doctor-4.jpg'; ?>" alt="">

                        <div class="doctor-info">
                            <h3>Souha Bourei</h3>
                            <span><i class="fas fa-map-marker-alt"></i> AMC Rakkah</span>
                            <p>Dermatology ,Specialist</p>

                            <a href="">Make Appointment<i class="far fa-calendar-check"></i></a>
                        </div>
                    </div>

                    <div class="doctor-card">
                        <img src="<?php echo get_template_directory_uri() . '/asset/doctors/doctor-5.jpg'; ?>" alt="">

                        <div class="doctor-info">
                            <h3>Noha Eldessouky</h3>
                            <span><i class="fas fa-map-marker-alt"></i> AMC Rakkah</span>
                            <p>Dermatology ,Specialist</p>

                            <a href="">Make Appointment<i class="far fa-calendar-check"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- location -->
            <div class="content location">
                <iframe src="https://maps.google.com/maps?q=26.3538124,50.2059651&z=15&output=embed"></iframe>
            </div>
        </div>
    </section>

</section>

<?php get_footer();?>


