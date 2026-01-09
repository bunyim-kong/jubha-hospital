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
      <a href="<?php echo home_url('hospital-and-clinic'); ?>">Hospital & Clinics</a>
      <a href="#">Patient Information</a>
      <a href="">Contact</a>

      <div class="dropdown">
        <a href="#">About us <i class="fas fa-chevron-down"></i></a>
        <div class="dropdown-menu">
          <a href="#">Page 1</a>
          <a href="#">Page 2</a>
        </div>
      </div>
    </nav>

    <div class="header-button">
      <a href="#" class="appointment-btn">
        Make An Appointment <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </div>
</header>
