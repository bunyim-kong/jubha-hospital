<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/hospital.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / <a href="<?php echo home_url('hospital-and-clinic'); ?>">Hospital and Clinic</a> / AMC Rakkah</span>
    <h1 class="">AMC Rakkah</h1>
</div>

<section class="hospital-section container">
    
    <section class="hero">
        <div class="hero-slide">
            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/DSC06581.jpg">

            <div class="hero-overlay">
                <h2>AMC Rakkah</h2>

                <a class="appointment-btn" href="<?php echo home_url('doctor-schedule'); ?>">Book an Appointment</a>
            </div>
        </div>
    </section>

    <!-- COUNTERS -->
    <section class="counter-content">
        <div class="counter left-corner">
            <i class="fa-solid fa-users"></i>
            <h3>532</h3>
            <p>Workforce</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-user-doctor"></i>
            <h3>53</h3>
            <p>Doctors</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-hospital"></i>
            <h3>5</h3>
            <p>Floors</p>
        </div>

        <div class="counter right-corner">
            <i class="fa-solid fa-stethoscope"></i>
            <h3>75</h3>
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
                    <strong>Welcome to Jubha Rakah Clinics</strong> <BR></BR>
                    Jubha Rakah Clinics, a cutting-edge medical facility, built to the highest standards of medical engineering, spans 5 floors and is dedicated to providing exceptional healthcare services to our community. <BR></BR>

                    With over 75 clinics covering various medical specialties, Jubha Medical Center in Al-Raka District proudly stands as the largest digital medical center in the Eastern Province. One of our standout features is the Diabetes and Endocrine Diseases Unit, the largest of its kind in the region. This specialized unit is staffed with highly skilled doctors who are experts in the field of diabetes, endocrine diseases, nutrition, and more. Patients can trust that they will receive comprehensive and personalized care for their diabetes and endocrine-related conditions. <BR></BR>

                    In addition, our medical center houses state-of-the-art Dermatology and Cosmetic clinics equipped with the latest and most advanced equipment. Whether for dermatological consultations, cosmetic procedures, or specialized treatments, our clinics offer a wide range of services to cater to various skincare needs. <BR></BR>

                    With a workforce of over 532 individuals, including 80 skilled doctors, we have the expertise and resources to deliver exceptional medical care. Our dedicated team is committed to your well-being and looks forward to serving you with compassion and excellence. <BR></BR>

                    At Jubha Rakah Clinics, your health, and well-being are our top priorities. We are committed to providing you with exceptional healthcare services, utilizing the latest technology and supported by our highly skilled medical professionals. <BR></BR>

                    We look forward to welcoming you to Jubha Rakah Clinics and providing you with the highest quality of care. <br>
                </p>
            </div>

            <!-- medical director -->
            <div class="content medical-director container">
                <div class="director-container">

                    <div class="director-image">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/medical-director/Dr._Mohammed_Nahhas.png" alt="Dr. Mohammed Nahhas">
                    </div>

                    <div class="director-content">
                        <h2>Dr. Mohammed Nahhas</h2>

                        <span class="director-title">Medical Director</span>

                        <p class="intro">
                            Dr. Mohammed Nahhas is an accomplished Orthopedic Surgeon specializing in Musculoskeletal Oncology and Sports Medicine. Currently serving as the Medical Director of Jubha Medical Center, Rakah, Dr. Nahhas has been a dedicated leader at the hospital since 2015.
                        </p>

                        <p>
                            Dr. Mohammed Nahhas began his successful medical career after graduating from King Abdulaziz University. He has held various prestigious positions, including Chairman of the Orthopedic Department and Head of the Sarcoma Unit at King Fahad Specialist Hospital Dammam.
                        </p>

                        <p>
                            After graduating from King Abdulaziz University College of Medicine, he traveled to Canada to continue his education in Orthopedic Surgery at McGill University in Montreal. He later completed fellowships in Musculoskeletal Oncology at the University of Montreal and Sports Medicine at the University of Toronto.
                        </p>

                        <p>
                            Driven to expand his knowledge beyond clinical practice, Dr. Nahhas earned a Master of Science in Health Administration from the University of Alabama and completed a Healthcare Management Program at Harvard Medical School.
                        </p>

                        <p>
                            A respected member of numerous professional organizations, he actively participates in the American Academy of Orthopedic Surgeons (AAOS), the Canadian Orthopedic Association (COA), and serves on the Credentialing and Privileges Committee at King Fahad Specialist Hospital.
                        </p>

                        <p>
                            Dr. Mohammed Nahhas’s commitment to his patients, expertise in his field, and continuous pursuit of excellence make him a highly regarded figure in the medical community.
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
                            <span>Time</span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 10:00 PM</span>
                        </div>
                    </div>

                    <div class="hour-card">
                        <span>Pharmacies</span>

                        <div class="card-cols">
                            <span>Time</span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 10:00 PM</span>
                        </div>
                    </div>

                    <div class="hour-card">
                        <span>Head Office</span>

                        <div class="card-cols">
                            <span>Time</span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- doctors -->
            <div class="content doctors-list">
                <div class="doctor-wrapper">
                    <div class="doctor-card">
                        <img src="<?php echo get_template_directory_uri() . '/asset/doctors/doctor-1.jpg'; ?>" alt="">

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