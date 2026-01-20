<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/pages/hospital.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / <a href="<?php echo home_url('hospital-and-clinic'); ?>">Hospital and Clinic</a> / AGH Khobar</span>
    <h1 class="">AGH khobar</h1>
</div>

<section class="hospital-section container">
    
    <section class="hero">
        <div class="hero-slide">
            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/DSC06581.jpg">

            <div class="hero-overlay">
                <h2>AGH khobar</h2>

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
            <i class="fa-solid fa-bed"></i>
            <h3>250</h3>
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
                    <strong>Welcome to Jubha General Hospital, Khobar</strong> <BR></BR>
                    We are delighted to introduce you to our exceptional medical complex, dedicated to providing comprehensive healthcare services.. <BR></BR>

                    Our facility comprises two outstanding in-patient buildings, a five-floor out-patient building, a cutting-edge dental and maxillo-facial center, a medical tower equipped with the latest technology, a building dedicated to Women and Children’s health, and an LTC unit.<BR></BR>

                    At Jubha General Hospital Khobar, we are committed to catering to diverse healthcare needs. Our team of highly skilled healthcare professionals specializes in fields such as cardiothoracic surgery, orthopedic surgery, pediatric surgery, dentistry, maxillo-facial surgery, and trauma care. With their expertise and dedication, we ensure exceptional care and strive for positive patient outcomes.<BR></BR>

                    With a capacity of 250 inpatient beds, we are fully equipped to accommodate a significant number of patients who require specialized care. Additionally, our outpatient building features 74 clinics, providing convenient access to a wide range of medical consultations and treatments. <BR></BR>

                    At Jubha General Hospital, Khobar, your health, and well-being are our top priorities. We are committed to providing you with exceptional healthcare services, utilizing the latest technology and supported by our highly skilled medical professionals. <BR></BR>

                    We look forward to welcoming you to Almana Rakah Clinics and providing you with the highest quality of care. <br>
                </p>
            </div>

            <!-- medical director -->
            <div class="content medical-director container">
                <div class="director-container">

                    <div class="director-image">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/medical-director-189712/21783914_9b31_4524_a135_7541451f6c28.jpeg" alt="Dr. Baher Aldamanhori ">
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

