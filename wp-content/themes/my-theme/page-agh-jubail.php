<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/pages/hospital.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / <a href="<?php echo home_url('hospital-and-clinic'); ?>">Hospital and Clinic</a> / AMC Rakkah</span>
    <h1 class="">AGH Jubail </h1>
</div>

<section class="hospital-section container">
    
    <section class="hero">
        <div class="hero-slide">
            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/s_jubail_building_rehan_1.jpg">

            <div class="hero-overlay">
                <h2>AGH Jubail </h2>

                <a class="appointment-btn" href="#">Book an Appointment</a>
            </div>
        </div>
    </section>

     <section class="counter-content">
        <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>100</h3>
            <p>Beds</p>
        </div>
        <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>100</h3>
            <p>Beds</p>
        </div>
        <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>100</h3>
            <p>Beds</p>
        </div>
    
        <div class="counter">
            <i class="fa-solid fa-bed"></i>
            <h3>100</h3>
            <p>Beds</p>
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
                    <strong>Welcome to Jubha General Hospital Jubail, </strong> <BR></BR>
                    

                    We take pride in being a state-of-the-art tertiary general hospital, providing exceptional healthcare services with a capacity of 100 beds. Located strategically within the bustling Industrial City of Jubail, we offer convenient access to patients in the area and surrounding cities. <BR></BR>

                    Our hospital has been meticulously designed and equipped to meet the specific healthcare needs of the working force and residents of Jubail Industrial City. We understand the unique challenges posed by industrial environments, and our facility is specially designed to handle industrial traumas and accidents. This includes expertise in handling road traffic accidents (RTAs), industrial accidents, chemical poisoning cases, and industrial gas explosions.<BR></BR>

                    Alongside our complex care offering, we provide a comprehensive range of specialized services to cater to our patients' diverse needs. This includes neurosurgery for spinal and head injuries, general surgical procedures, medical endoscopic diagnostic procedures, and comprehensive orthopedic interventions such as total knee replacement surgeries.<BR></BR>

                    At Almana General Hospital, Jubail, your health and well-being are our top priorities. We are committed to providing you with exceptional healthcare services, utilizing the latest technology and supported by our highly skilled medical professionals.<BR></BR>
                    
                    We look forward to welcoming you to Jubha Rakah Clinics and providing you with the highest quality of care. <br>
                </p>
            </div>

            <!-- medical director -->
            <div class="content medical-director container">
                <div class="director-container">

                    <div class="director-image">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/medical-director-689349/unnamed.jpg" alt="Dr. Faisal Abdalla Hashim ">
                                           </div>

                    <div class="director-content">
                        <h2>Dr. Faisal Abdalla Hashim </h2>

                        <span class="director-title">Medical Director</span>

                        <p class="intro">
                            Dr.Faisal Hashim is a distinguished medical professional who currently serves as the Hospital and Medical Director at Almana General Hospital in Jubail, Saudi Arabia.
                        </p>

                        <p>
                           With a remarkable career spanning over 24 years, Dr.Faisal Hashim has played various key roles in the hospital, including serving as the Head of Medical Departments, Consultant Physician Internist, and Chief of the Medical Staff. His extensive experience and expertise have contributed immensely to the growth and development of the Almana Group of Hospitals, making it one of the leading healthcare institutions in the region.
                        </p>

                        <p>
                           Dr. Faisal Hashim is a highly educated and accomplished medical professional, having graduated from the prestigious Faculty of Medicine at the University of Khartoum in Sudan. He holds a Ph.D. in Endocrine Immunology from the University of Wales College of Medicine in Cardiff, United Kingdom, and has also earned a diploma in Biomedical Methods.
                        </p>

                        <p>
                            He is a distinguished member and fellow of the Royal College of Physicians in Edinburgh, United Kingdom, reflecting his dedication to professional development and his commitment to staying at the forefront of advancements in the medical field. His academic achievements and wealth of experience have made him a respected authority in the medical community, both locally and internationally
                        </p>

                        <p>
                           Dr.Faisal Hashim is a prolific writer, having co-authored over 40 publications in a range of esteemed medical journals. His scholarly works include contributions to prestigious publications such as Current Topics in Thyroid Autoimmunity, the Journal of Endocrinological Investigation, and the International Congress of Infectious Diseases.
                        </p>

                        <p>
                            Dr.Faisal Hashim's research and publications demonstrate his passion for advancing medical knowledge and his commitment to improving patient outcomes. His extensive contributions to the field have earned him recognition as a leading authority in endocrinology and immunology, both nationally and internationally.
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

