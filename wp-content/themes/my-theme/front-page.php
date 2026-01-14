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




<!-- introduction start -->
<section class='content_section container'>
  <div class="content-wrapper">
    <div class="content_tittle">
      <h4>ABout us</h4>
          <h2>Seven decades of care and quality</h2>
          <p> Since our inception in 1949, we have a legacy of excellence. <br> We are a family hospital fully dedicated to caring for the <br> needs of the patients, communities, and Kingdom we serve <br> to keep healthy. Almana believes in offering compassionate  <br> care, inspired by family values which ...</p>
          <p><a href="#" class="appointment-btn">
              Read More <i class="fas fa-chevron-right"></i>
            </a></p>
    </div>
    
    <div class="image-cols">
      <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/overview/s_JAAN8284.jpg" alt="">
    </div>
  </div>
</section>


<!-- Statistics -->
<section class="statistics-start">
  <div class="container">

    <div class="main-icon">

      <div class="icon-hospital">
        <div class="counter-icon">
          <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/workforce_1.svg" alt="Medical Facilities">
        </div>
        <div class="counter-text">
          <h2>1200</h2>
          <p>Qualified <br> Workforce</p>
        </div>
      </div>

      <div class="icon-hospital">
        <div class="counter-icon">
          <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/doctors_2.svg" alt="Specialized Doctors">
        </div>
        <div class="counter-text">
          <h2>800</h2>
          <p>Specialized Doctors</p>
        </div>
      </div>

      <div class="icon-hospital">
        <div class="counter-icon">
          <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/departments.svg" alt="Medical Facilities">
        </div>
        <div class="counter-text">
          <h2>9</h2>
          <p>Medical Facilities</p>
        </div>
      </div>

      <div class="icon-hospital">
        <div class="counter-icon">
          <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/bed.svg" alt="Total beds">
        </div>
        <div class="counter-text">
          <h2>1300</h2>
          <p>Total Beds</p>
        </div>
      </div>

    </div><!-- /.main-icon -->

    <div class="text-show">
      <h2>AGH At a Glance</h2>
      <p>We provide specialized units in various medical specialties</p>
    </div>

  </div><!-- /.container -->
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

