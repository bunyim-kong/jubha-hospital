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
            <span class="eyebrow">Behind every continuous medical care</span>
            <h2 class="section-title" style="color: var(--sec-color);">Dedicated <br>
            National Talent
            </h2>
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
            <span class="eyebrow">Your health, Our priority</span>
            <h2 class="section-title" style="color: var(--sec-color);">OPD Clinics Open <br>
            Until 10 PM
            </h2>
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
            <span class="eyebrow">Your health, Our priority</span>
            <h2 class="section-title" style="color: var(--sec-color);">Easier Communication <br>
            with Almana WhatsApp
            </h2>
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
            <span class="eyebrow">Almana Group of Hospitals</span>
            <h2 class="section-title" style="color: var(--sec-color);">Quality Healthcare Closer <br>
            to You
            </h2>
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
            <span class="eyebrow">Almana Group of Hospitals</span>
            <h2 class="section-title" style="color: var(--sec-color);">
              Care at Your Fingertips
            </h2>
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

<!-- Find doctor -->
<section class="find-doctor-section">
  <div class="find-doctor-container">
    <div class="find-doctor-card">
      <div class="find-doctor-header">
        <i class="fas fa-user-md"></i>
        <h2 class="find-doctor-title">Find a Specialist</h2>
      </div>

      <form class="find-doctor-form" action="/search-results" method="GET">
        <div class="input-field">
          <label>Location</label>
          <select name="location" required>
            <option value="">Select Hospital</option>
            <option value="AMC Rakkah">AMC Rakkah</option>
            <option value="AGH Khobar">AGH Khobar</option>
            </select>
        </div>

        <div class="input-field">
          <label>Specialization</label>
          <select name="specialization" required>
            <option value="">Select Specialty</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Dermatology">Dermatology</option>
            </select>
        </div>

        <div class="submit-field">
          <button type="submit" class="find-doctor-btn">
            <span>Search Now</span>
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<br><br>

<!-- About section -->
<section class='about-section container'>
 <div class="about-content content-wrapper">
        <div class="text-side">
            <span class="sub-headline">Seven decades of care and quality</span>

            <h1 class="main-title">The Hospital</h1>
            
            <div class="description">
                <p class="lead-text">
                    Since our inception in 1949, we have a legacy of excellence. We are a family hospital fully dedicated to caring for the needs of the patients, communities, and Kingdom we serve to keep healthy. Jubha believes in offering compassionate care, inspired by family values which has kept patients happier and healthier for over 75 years – this is a deeply ingrained part of our DNA. What’s more, our rich legacy of delivering person-centric, specialized, integrated, and comprehensive care, makes Almana a trusted institution and drives our journey to meet the growing needs of today and generations to come.
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
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/workforce_1.svg" alt="Qualified Workforce ">
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
                      <h2 class="counter" data-target="800">800</h2>
                      <p>Specialized Doctors</p>
                  </div>
              </div>

              <div class="stat-card">
                  <div class="icon-wrapper">
                      <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/departments.svg" alt="Medical Facilities ">
                  </div>
                  <div class="stat-info">
                      <h2 class="counter" data-target="800">10</h2>
                      <p>Medical Facilities</p>
                  </div>
              </div>

              <div class="stat-card">
                  <div class="icon-wrapper">
                      <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/bed.svg" alt="Total beds">
                  </div>
                  <div class="stat-info">
                      <h2 class="counter" data-target="1 300">1300+</h2>
                      <p>Total bens</p>
                  </div>
              </div>
          </div>
    </div>
</section>

<section class="production-solution">
    <div class="container">
        <div class="department-header">
            <div class="header-left">
                <span class="sub-headline">Departments</span>
                <h2 class="main-title">7 Decades of <strong>Excellence</strong></h2>
            </div>
            <a href="all-department" class="appointment-btn">All Departments</a>
        </div>

        <div class="dept-swiper-container">
                <div class="dept-wrapper">
                    
                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href=""><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/respiratory-therapy/l_shutterstock_1692460999.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/respiratory_therapy.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Respiratory Therapy</h3>
                                  <p>Specialized Lung Care</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href=""><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/anesthesiology/l_shutterstock_2083979461.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/Anesthesiology.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Anesthesiology</h3>
                                  <p>Safe Pain Management</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href=""><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/cardiology/l_shutterstock_1905695371.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/cardiology.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Cardiac Surgery</h3>
                                  <p>Expert Heart Care</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="physical-therapy"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/physical-therapy/l_shutterstock_1902491581.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/physical_therapy.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Physical Therapy</h3>
                                  <p>Almana Hospital's Physical Therapy</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="cath-lab"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/cath-lab/l_shutterstock_1113511148.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/cath.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Cath Lab</h3>
                                  <p>Almana Hospital's Cath Lab Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="emergency-medicine"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/emergency-medicine/l_shutterstock_1189798267.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/emergency.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Emergency</h3>
                                  <p>Almana Hospital's Emergency Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="endoscopy"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/endoscopy/l_shutterstock_1054047983.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/endoscopy_3.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Endoscopy</h3>
                                  <p>Almana Hospital's Endoscopy Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="intensive-care"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/intensive-care/l_shutterstock_1698410182.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/Intensive_Care.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Intensive Care Unit</h3>
                                  <p>Almana Hospital's ICU Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="nursery"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/nursery/l_shutterstock_1141042889.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/nursery.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Nursery</h3>
                                  <p>Almana Hospital's Nursery</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="pathology-and-laboratory"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/pathology-and-laboratory/l_shutterstock_761873569.jpg" class="card-bg"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><img src="https://ds4kyztv1rtw.cloudfront.net/uploads/pathology_laboratory.svg" alt="icon"></div>
                              <div class="card-info">
                                  <h3>Pathology & Laboratory</h3>
                                  <p>Almana Hospital's Lab Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
          </div>
        
    </div>
</section>


<!-- media update -->
<section class="media-section">
        <div class="container">
            <div class="section-header">
                <h6 class="subtitle">Media Update</h6>
                <h2 class="title">Latest Happenings</h2>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper news-grid">
                    <div class="swiper-slide news-card">
                         <a href="successful-scoliosis-surgery-for-14-year-old-girl">
                        <div class="img-wrapper">
                            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/news/s_Screenshot_2025_04_08_213423.png" alt="Scoliosis Surgery">
                            <span class="category-tag">News</span>
                        </div>
                        <div class="content">
                            <h5>Successful Scoliosis Surgery for 14-Year-Old Girl</h5>
                            <span class="read-more">Read Story</span>
                        </div>
                    </a>
                    </div>

                    


            <!-- <div class="news-grid">
                <div class="news-card">
                    <a href="successful-scoliosis-surgery-for-14-year-old-girl">
                        <div class="img-wrapper">
                            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/news/s_Screenshot_2025_04_08_213423.png" alt="Scoliosis Surgery">
                            <span class="category-tag">News</span>
                        </div>
                        <div class="content">
                            <h5>Successful Scoliosis Surgery for 14-Year-Old Girl</h5>
                            <span class="read-more">Read Story</span>
                        </div>
                    </a>
                </div>

                <div class="news-card">
                    <a href="physiotherapy-types-and-benefits">
                        <div class="img-wrapper">
                            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/blog/s_DSC08628.jpg" alt="Physiotherapy">
                            <div class="date-badge">26 Sep, 2023</div>
                        </div>
                        <div class="content">
                            <h6 class="specialty">Specialized Care</h6>
                            <h5>Physiotherapy: Enhancing Quality of Life</h5>
                            <span class="read-more">Read Story</span>
                        </div>
                    </a>
                </div>
                <div class="news-card">
                    <a href="physiotherapy-types-and-benefits">
                        <div class="img-wrapper">
                            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/blog/s_DSC08628.jpg" alt="Physiotherapy">
                            <div class="date-badge">26 Sep, 2023</div>
                        </div>
                        <div class="content">
                            <h6 class="specialty">Specialized Care</h6>
                            <h5>Physiotherapy: Enhancing Quality of Life</h5>
                            <span class="read-more">Read Story</span>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
    </section>


<section class="branch-section">
  <div class="container">
    <div class="department-header">
        <div class="header-left">
            <span class="sub-headline">Branches</span>
            <h2 class="main-title">Hospital Locations</h2>
        </div>
        <a href="<?php echo home_url('hospital-and-clinic'); ?>" class="appointment-btn">All Branches</a>
    </div>

    <div class="branch-wrapper">
      <article class="location-card">
            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/almana-medical-center-rakah1/DSC06581.jpg" alt="Hospital 1"/>

            <div class="location-info">
                <h1>AMC Rakkah</h1>

                <a href="<?php echo home_url('amc-rakkah'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/almana-hospital-khobar1/DJI_0093_Edit_2_1.png" alt="Hospital 2"/>

            <div class="location-info">
                <h1>AGH Khobar</h1>

                <a href=""><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>
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



<script>
  const departmentSwiper = new Swiper('.dept-swiper-container', {
      // These lines are the key to changing the names
      wrapperClass: 'dept-wrapper',
      slideClass: 'dept-slide',
      
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
        autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
          el: '.dept-pagination',
          clickable: true,
      },
      breakpoints: {
          768: { slidesPerView: 2 },
          1200: { slidesPerView: 3 }
      }
  });
</script>


<?php get_footer(); ?>