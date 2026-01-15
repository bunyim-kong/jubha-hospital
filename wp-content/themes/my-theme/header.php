<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/header.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>

<header class="navbar">
  <div class="header-inner container">
    <!-- Logo -->
    <div class="logo-block">
      <a href=""
        ><img
          src="<?php echo get_template_directory_uri() . '/asset/images/logo.png'; ?>"
          width="160"
      /></a>
    </div>

    <!-- Top Bar -->
    <div class="top-bar">
      <div class="top-info">
        <span>info@almanahospital.com.sa</span>
      </div>

      <div class="top-info">
        <span>P.O. Box 3568, Al Khobar 31952, Saudi Arabia</span>
      </div>

      <div class="top-info">
        <img src="images/call.png" alt="" />
        <span>+966 920033440</span>
      </div>

      <!-- Social link -->
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
      </div>
    </div>
  </div>

  <!-- ===== MENU AREA ===== -->
  <div class="menu-header container">
    <nav class="nav-menu">
      <a href="<?php echo home_url('home'); ?>">Home</a>

      <div class="dropdown">
        <p>Hospital & Clinics <i class="fas fa-caret-down"></i></p>

        <div class="dropdown-menu">
          <a href="<?php echo home_url('hospital-and-clinic'); ?>">All Location</a>
          <a href="<?php echo home_url('amc-rakkah'); ?>">AMC Rakkah</a>
          <a href="">AGH Khobar</a>
          <a href="">AGH Dammam</a>
          <a href="">AGH Aziziah Dammam</a>
          <a href="#">AGH Jubail</a>
          <a href="#">AGH Jubail</a>
          <a href="">AGH Hofuf</a>
        </div>
      </div>

      <a href="#">Patient Information</a>

      <div class="dropdown">
        <p>About us <i class="fas fa-caret-down"></i></p>
        <div class="dropdown-menu">
          <a href="<?php echo home_url('overview'); ?>">Overview</a>
          <a href="<?php echo home_url('our-culture'); ?>">Our Culture</a>
          <a href="">CEO Message</a>
          <a href="">PlaneTree</a>
        </div>
      </div>

      <a href="">Contact</a>
    </nav>

    <div class="header-button">
      <a href="#" class="appointment-btn">
        Make An Appointment <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </div>
</header>
