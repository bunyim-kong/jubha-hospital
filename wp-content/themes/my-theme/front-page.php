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

      <!-- <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/banner2.png"alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>Almana Group of Hospitals</span>
            <h1>Quality Healthcare Closer to You</h1>
            <a href="#" class="appointment-btn">
              Explore our locations<i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div> -->

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
<!-- main_search -->
<div class="main_search">
<div class="find_docter">
  <div class="search_tittle"> <h1>Find A Docter</h1></div>
  <div class="btn_search">
  </div>
</div>



</div>



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
