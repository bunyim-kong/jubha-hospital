<link
  rel="stylesheet"
  href="<?php echo get_template_directory_uri(); ?>/css/main.css"
/>
<link
  rel="stylesheet"
  href="<?php echo get_template_directory_uri(); ?>/style.css"
/>
<link
  rel="stylesheet"
  href="<?php echo get_template_directory_uri(); ?>/css/pages/home.css"
/>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>
<?php get_header();?>

<section class="hero-section">
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <!-- slide highligh -->
      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/website_banner_4x_1.png"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>BEHIND EVERY CONTINUOUS MEDICAL CARE</span>
            <h1>Dedicated National Talent</h1>
            <a href="#" class="appointment-btn"
              >Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/website_banner_4x_1.png"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>BEHIND EVERY CONTINUOUS MEDICAL CARE</span>
            <h1>Dedicated National Talent</h1>
            <a href="#" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/website_banner_4x_1.png"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>BEHIND EVERY CONTINUOUS MEDICAL CARE</span>
            <h1>Dedicated National Talent</h1>
            <a href="#" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/website_banner_4x_1.png"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>BEHIND EVERY CONTINUOUS MEDICAL CARE</span>
            <h1>Dedicated National Talent</h1>
            <a href="#" class="appointment-btn"
              >Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="https://ds4kyztv1rtw.cloudfront.net/uploads/banner/website_banner_4x_1.png"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span>BEHIND EVERY CONTINUOUS MEDICAL CARE</span>
            <h1>Dedicated National Talent</h1>
            <a href="#" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
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
