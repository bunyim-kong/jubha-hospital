<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet"href="<?php echo get_template_directory_uri(); ?>/css/pages/home.css"/>
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
<?php get_header();?>


<section class="hero-section">
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- slide highligh -->
      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/website_banner_4x_1.png"
          alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>Behind Every Continuous Medical Care</span>
            <h1>Dedicated <br> National Talent</h1>
            <a href="#" class="appointment-btn"
              >Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/ALMANA_OPD_ExtendedWorkingHours_Web_Banner.jpg"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>Your Health, Our Priority</span>
            <h1>OPD Clinics Open Until <br>PM 10</h1>
            <a href="#" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/ALMANA_WhatsApp_Web_Banner_EN.jpg"
          alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>Your health, Our priority
            <h1>Easier Communication <br> with Jubha WhatsApp</h1>
            <a href="#" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/banner2.png"
          alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>Almana Group of Hospitals </span>
            <h1>Quality Healthcare Closer To You</h1>
            <a href="#" class="appointment-btn">
               Explore our locations <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/banner3.png"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>Almana Group of Hospitals</span>
            <h1>Care at Your Fingertips</h1>
            <a href="#" class="appointment-btn">
              Download the App <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="find-doctor-section">
  <div class="find-doctor-container">

    <h2 class="find-doctor-title">Find Doctor</h2>

    <form class="find-doctor-form" action="/search-results" method="GET">

      <!-- Location Dropdown -->
      <div class="field-group">
        <select name="location" required>
          <option value="">Select Location</option>
          <option value="AMC Rakkah">AMC Rakkah</option>
          <option value="AGH Khobar">AGH Khobar</option>
          <option value="AGH Dammam">AGH Dammam</option>
          <option value="Oncology Center">Oncology Center</option>
          <option value="AGH Aziziah">AGH Aziziah</option>
          <option value="AGH Jubail">AGH Jubail</option>
          <option value="AMC Jubail">AMC Jubail</option>
          <option value="AGH Hofuf">AGH Hofuf</option>
        </select>
      </div>

      <!-- Specialization Dropdown -->
      <div class="field-group">
        <select name="specialization" required>
          <option value="">Select Specialization</option>
          <option value="Cardiology">Cardiology</option>
          <option value="Dermatology">Dermatology</option>
          <option value="Orthopaedic">Orthopaedic</option>
          <option value="Neurology">Neurology</option>
          <option value="Pediatrics">Pediatrics</option>
          <option value="Obstetric & Gynecology">Obstetric & Gynecology</option>
          <option value="Urology">Urology</option>
          <option value="Internal Medicine">Internal Medicine</option>
        </select>
      </div>

      <!-- Search Button -->
      <button type="submit" class="find-doctor-btn">
        Find Doctor  <i class="fas fa-chevron-right"></i>
      </button>

    </form>

  </div>
</section>




<!-- About section -->
<section class='about-section container'>
 <div class="about-content content-wrapper">
        <div class="text-side">
            <span class="sub-headline">Seven decades of care and quality</span>

            <h1 class="main-title">The Hospital</h1>
            
            <div class="description">
                <p class="lead-text">
                    Since our inception in 1949, we have a legacy of excellence. We are a family hospital fully dedicated to caring for the needs of the patients, communities, and Kingdom we serve to keep healthy. Almana believes in offering compassionate care, inspired by family values which has kept patients happier and healthier for over 75 years – this is a deeply ingrained part of our DNA. What’s more, our rich legacy of delivering person-centric, specialized, integrated, and comprehensive care, makes Almana a trusted institution and drives our journey to meet the growing needs of today and generations to come.
                </p>
            </div>
        </div>
        
        <div class="vdo-side">
            <div class="mp4-container">
                <a href="https://youtu.be/QdM77xj2C0I?si=B9oZmV19PteUUz9G" target="_blank" class="video-trigger">
                    <div class="overlay-gradient"></div>

                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/overview/JAAN8284.jpg" alt="Almana Hospital Building">

                    <div class="play-icon">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="30" cy="30" r="30" fill="white" fill-opacity="0.3"/>
                            <path d="M40 30L25 38.6603V21.3397L40 30Z" fill="white"/>
                        </svg>
                    </div>
                </a>
                
                <div class="floating-badge">
                    <span class="badge-label">Serving the community since</span>
                    <span class="badge-year">1949</span>
                </div>
            </div>
        </div>
    </div>
    
</section>

<!-- Statistics -->
<section class="stats-section">
    <div class="container">
        <div class="stats-header">
            <div class="lead-text">
                <p>Establishing itself as the center for healthcare excellence in the Kingdom, Almana presently employs more than <strong>6,500+</strong> highly qualified professionals including <strong>800+</strong> specialized doctors and has extended its services to operating and managing healthcare contracts in other regions of Saudi Arabia.</p>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="icon-wrapper">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/nurse.svg" alt="Professionals">
                </div>
                <div class="stat-info">
                    <h2 class="counter" data-target="6500">6,500+</h2>
                    <p>Qualified Professionals</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="icon-wrapper">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/Group_2141.svg" alt="Doctors">
                </div>
                <div class="stat-info">
                    <h2 class="counter" data-target="800">800+</h2>
                    <p>Specialized Doctors</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="icon-wrapper">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/Group_2141.svg" alt="Doctors">
                </div>
                <div class="stat-info">
                    <h2 class="counter" data-target="800">800+</h2>
                    <p>Specialized Doctors</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="icon-wrapper">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/Group_2141.svg" alt="Doctors">
                </div>
                <div class="stat-info">
                    <h2 class="counter" data-target="800">800+</h2>
                    <p>Specialized Doctors</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

