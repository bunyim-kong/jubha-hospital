<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/pages/hospital.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / <a href="<?php echo home_url('hospital-and-clinic'); ?>">Hospital and Clinic</a> / AGH Hofuf</span>
    <h1 class="">AGH Hofuf</h1>
</div>

<section class="hospital-section container">
    
    <section class="hero">
        <div class="hero-slide">
            <img src="https://i.pinimg.com/1200x/c8/90/ea/c890ea6091a896dec3339857e2b15774.jpg">
            <div class="hero-overlay">
                <h2>AGH Hofuf</h2>

                <a class="appointment-btn" href="#">Book an Appointment</a>
            </div>
        </div>
    </section>

     <section class="counter-content">
         <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>150</h3>
            <p>Beds</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-user-doctor"></i>
            <h3>150+</h3>
            <p>Doctors</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>150</h3>
            <p>Beds</p>
        </div>

        <div class="counter">
            <i class="fa-solid fa-user-doctor"></i>
            <h3>150</h3>
            <p>Doctors</p>
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
                    <strong>Welcome to J Geneubharal Hospital Hofuf.</strong> <BR></BR>
                    Jubha General Hospital, Hofuf is equipped with state-of-the-art facilities and staffed by a team of highly skilled and compassionate healthcare professionals.<BR></BR>

                    We offer a comprehensive range of services across various specialties to meet the diverse healthcare needs of our patients. <BR></BR>

                    We excel in a comprehensive range of specialized services including Dermatology, Obstetrics and Gynecology, Pediatrics, Orthopedics, ENT (Ear Nose Throat), Internal Medicine, General Surgery, Ophthalmology, Dental, Radiology, Laboratory, And Physiotherapy.<BR></BR>

                    At Jubha General Hospital in Hofuf, we prioritize your health and well-being above all else. Our facility is equipped with 150 beds and staffed by 150+ teams of highly skilled medical professionals. We are dedicated to delivering exceptional healthcare services, leveraging the latest technology to ensure your utmost care and satisfaction.<BR></BR>

                    At Jubha Rakah Clinics, your health, and well-being are our top priorities. We are committed to providing you with exceptional healthcare services, utilizing the latest technology and supported by our highly skilled medical professionals. <BR></BR>

                    We look forward to welcoming you to Jubha General Hospital, Hofuf, and providing you with the highest standard of care. <br>
                </p>
            </div>

            <!-- medical director -->
            <div class="content medical-director container">
                <div class="director-container">

                    <div class="director-image">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/medical-director-589977/e95e459e_35ec_41a6_8289_a505a4c1839d.jpeg" alt="Dr. Ali Al Khars ">
                                                                   </div>

                    <div class="director-content">
                        <h2>Dr. Ali Al Khars </h2>

                        <span class="director-title">Medical Director</span>

                        <p class="intro">
                            Dr. Ali Al Khars is an accomplished medical professional with an impressive background in General Psychiatry Child and Adolescent Psychiatry and healthcare leadership. As the Hospital and Medical Director for Almana Hospital in Al Al-Ahsa, Dr. Al Khars has been instrumental in driving the hospital’s success for almost two decades.
                        </p>

                        <p>
                            Prior to his current role, Dr. Al Khars served as a Psychiatrist and Medical Director of Al Ahsa Psychiatric Hospital for more than 17 years, where he gained extensive experience in the field of Psychiatry and Hospital Management. He Holds a medical degree from King Faisal University and has completed an esteemed diploma in Psychological Medicine from King Saud University and the Royal College of Physicians and Surgeon Ireland.
                        </p>

                        <p>
                            Dr. Ali Al Khars has also pursued further education and training in the field of psychiatry, having completed a Diploma in Child and Adolescent Psychiatry from the University of London and the Arab Board of Psychiatry. In addition, he holds a Master’s in Business Administration from the University of Delaware, which had equipped him with the knowledge and skills to effectively manage and lead the hospital.
                        </p>

                        <p>
                            Dr. Ali’s national and international post graduate Psychiatric Qualifications and his experience in the field of General Psychiatry and Child and Adolescent Psychiatry which extends for more than 35 years have earned him a well-deserved reputation as a leader in the Psychiatric field in addition to Health Care Management.
                        </p>

                        <p>
                            A respected member of numerous professional organizations, he actively participates in the American Academy of Orthopedic Surgeons (AAOS), the Canadian Orthopedic Association (COA), and serves on the Credentialing and Privileges Committee at King Fahad Specialist Hospital.
                        </p>

                        <p>
                            Dr. Talal Nahhas’s commitment to his patients, expertise in his field, and continuous pursuit of excellence make him a highly regarded figure in the medical community.
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
                            <span>1st Shift</span>

                            <span><i class="far fa-clock"></i> 8:00 AM - 10:00 PM</span>
                        </div>
                    </div>

                    <div class="hour-card">
                        <span>Pharmacies</span>

                        <div class="card-cols">
                            <span>2nd Shift</span>

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

<?php get_footer();?>

