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
          src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-talent.webp'; ?>"
          alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span class="eyebrow">Behind every continuous medical care</span>
            <h2 class="section-title" style="color: var(--sec-color);">Dedicated <br>
            National Talent
            </h2>
            <a href="<?php echo home_url('doctor-schedule'); ?>" class="appointment-btn"
              >Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-opd.webp'; ?>"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span class="eyebrow">Your health, Our priority</span>
            <h2 class="section-title" style="color: var(--sec-color);">OPD Clinics Open <br>
            Until 10 PM
            </h2>
            <a href="<?php echo home_url('doctor-schedule'); ?>" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-whatsapp.webp'; ?>"
          alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span class="eyebrow">Your health, Our priority</span>
            <h2 class="section-title" style="color: var(--sec-color);">Easier Communication <br>
            with Almana WhatsApp
            </h2>
            <a href="<?php echo home_url('doctor-schedule'); ?>" class="appointment-btn">
              Book Now <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <img
          src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-locations.webp'; ?>"
          alt=""/>

        <div class="slide-overlay">
          <div class="overlay-text">
            <span class="eyebrow">Jubha Group of Hospitals</span>
            <h2 class="section-title" style="color: var(--sec-color);">Quality Healthcare Closer <br>
            to You
            </h2>
            <a href="<?php echo home_url('hospital-and-clinic'); ?>" class="appointment-btn">
               Explore our locations <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <img
          src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-app.webp'; ?>"
          alt=""
        />

        <div class="slide-overlay">
          <div class="overlay-text">
            <span class="eyebrow">Jubha Group of Hospitals</span>
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
            <option value="AGH Dammam">AGH Dammam</option>
            <option value="AGH Aziziah Dammam">AGH Aziziah Dammam</option>
            <option value="AGH Jubail">AGH Jubail</option>
            <option value="AGH Jubail2">AGH Jubail</option>
            <option value="AGH Hofuf">AGH Hofuf</option>
          </select>
        </div>

        <div class="input-field">
          <label>Specialization</label>
          <select name="specialization" required>
            <option value="">Select Specialty</option>
            <option value="Respiratory Therapy">Respiratory Therapy</option>
            <option value="Anesthesiology">Anesthesiology</option>
            <option value="Cardiac Surgery">Cardiac Surgery</option>
            <option value="Physical Therapy">Physical Therapy</option>
            <option value="Cath Lab">Cath Lab</option>
            <option value="Emergency">Emergency</option>
            <option value="Endoscopy">Endoscopy</option>
            <option value="Intensive Care Unit">Intensive Care Unit</option>
            <option value="Nursery">Nursery</option>
            <option value="Pathology & Laboratory">Pathology & Laboratory</option>
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

                    <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/about.webp'; ?>" alt="Almana hospital network">

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
                    <i class="fas fa-users" aria-hidden="true"></i>
                      </div>
                  <div class="stat-info">
                      <h2 class="counter" data-target="6500">6,500+</h2>
                      <p>Qualified Professionals</p>
                  </div>
              </div>

              <div class="stat-card">
                  <div class="icon-wrapper">
                      <i class="fas fa-user-doctor" aria-hidden="true"></i>
                  </div>
                  <div class="stat-info">
                      <h2 class="counter" data-target="800">800</h2>
                      <p>Specialized Doctors</p>
                  </div>
              </div>

              <div class="stat-card">
                  <div class="icon-wrapper">
                      <i class="fas fa-hospital" aria-hidden="true"></i>
                  </div>
                  <div class="stat-info">
                      <h2 class="counter" data-target="800">10</h2>
                      <p>Medical Facilities</p>
                  </div>
              </div>

              <div class="stat-card">
                  <div class="icon-wrapper">
                      <i class="fas fa-bed" aria-hidden="true"></i>
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
                          <a href=""><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-talent.webp'; ?>" class="card-bg" alt="Respiratory therapy"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-lungs" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Respiratory Therapy</h3>
                                  <p>Specialized Lung Care</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href=""><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-whatsapp.webp'; ?>" class="card-bg" alt="Anesthesiology"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-syringe" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Anesthesiology</h3>
                                  <p>Safe Pain Management</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href=""><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-cardiology.webp'; ?>" class="card-bg" alt="Cardiology"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-heart-pulse" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Cardiac Surgery</h3>
                                  <p>Expert Heart Care</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="physical-therapy"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-intensive-care.webp'; ?>" class="card-bg" alt="Physical therapy"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-person-walking" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Physical Therapy</h3>
                                  <p>Almana Hospital's Physical Therapy</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="cath-lab"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-cath-lab.webp'; ?>" class="card-bg" alt="Cath lab"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-stethoscope" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Cath Lab</h3>
                                  <p>Jubha Hospital's Cath Lab Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="emergency-medicine"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-emergency.webp'; ?>" class="card-bg" alt="Emergency medicine"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-truck-medical" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Emergency</h3>
                                  <p>Almana Hospital's Emergency Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="endoscopy"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-pathology.webp'; ?>" class="card-bg" alt="Endoscopy"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-microscope" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Endoscopy</h3>
                                  <p>Jubha Hospital's Endoscopy Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="intensive-care"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-intensive-care.webp'; ?>" class="card-bg" alt="Intensive care"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-bed-pulse" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Intensive Care Unit</h3>
                                  <p>Jubha Hospital's ICU Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="nursery"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-nursery.webp'; ?>" class="card-bg" alt="Nursery"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-baby" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Nursery</h3>
                                  <p>Almana Hospital's Nursery</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="dept-slide">
                      <div class="dept-card">
                          <a href="pathology-and-laboratory"><img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-pathology.webp'; ?>" class="card-bg" alt="Pathology and laboratory"></a>
                          <div class="glass-overlay">
                              <div class="icon-box"><i class="fas fa-flask" aria-hidden="true"></i></div>
                              <div class="card-info">
                                  <h3>Pathology & Laboratory</h3>
                                  <p>Jubha Hospital's Lab Department</p>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
          </div>
        
    </div>
</section>

<section class="production-solution">
    <div class="container">
        <div class="department-header">
            <div class="header-left">
                <span class="sub-headline">Media Update</span>
                <h2 class="main-title">Latest Happenings</h2>
            </div>
        </div>

        <div class="dept-swiper-container">
                <div class="dept-wrapper">
                    
                    <div class="dept-slide">
                        <div class="news-card">
                            <a href="successful-scoliosis-surgery-for-14-year-old-girl">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/news-breast-cancer.webp'; ?>" alt="Hospital news">
                                    <span class="category-tag">News</span>
                                </div>
                                <div class="content">
                                    <h5>Successful Scoliosis Surgery for 14-Year-Old Girl</h5>
                                    <span class="read-more">Read Story</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="dept-slide">
                        <div class="news-card">
                            <a href="physiotherapy-types-and-benefits-in-enhancing-quality-of-life">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/news-fellowship.webp'; ?>" alt="Hospital fellowship news">
                                    <div class="date-badge">26 Sep, 2023</div>
                                </div>
                                <div class="content">
                                    <h5>Physiotherapy: Types and Benefits in Enhancing Quality of Life</h5>
                                    <span class="read-more">Read Story</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="dept-slide">
                        <div class="news-card">
                            <a href="home-healthcare-service">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/news-kidney.webp'; ?>" alt="Hospital care news">
                                    <div class="date-badge">26 Sep, 2023</div>
                                </div>
                                <div class="content">
                                    <h5>Home Healthcare Service of our hospital</h5>
                                    <span class="read-more">Read Story</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="dept-slide">
                        <div class="news-card">
                            <a href="signs-of-a-weak-immune-system">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/news-triplets.webp'; ?>" alt="Hospital medical news">
                                    <span class="category-tag">Medical Encyclopedia</span>
                                </div>
                                <div class="content">
                                    <h5>Signs of a Weak Immune System: How Your Body Sends Distress Signals</h5>
                                    <span class="read-more">Read Story</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="dept-slide">
                        <div class="news-card">
                            <a href="leukemia-symptoms-causes-and-treatment">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/news-brain-tumor.webp'; ?>" alt="Hospital medical news">
                                    <span class="category-tag">Medical Encyclopedia</span>
                                </div>
                                <div class="content">
                                    <h5>Leukemia Symptoms, Causes and Treatment</h5>
                                    <span class="read-more">Read Story</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
          </div>
        
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
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/medical-center-rakkah.webp'; ?>" alt="Almana Medical Center Rakkah"/>

            <div class="location-info">
                <h1>AMC Rakkah</h1>

                <a href="<?php echo home_url('amc-rakkah'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hospital-khobar.webp'; ?>" alt="Almana General Hospital Khobar"/>

            <div class="location-info">
                <h1>AGH Khobar</h1>

                <a href="<?php echo home_url('agh-khobar'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
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
