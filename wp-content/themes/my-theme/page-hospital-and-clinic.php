<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/hospital.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home');?>">Home</a> / Hospital and Clinic</span>
    <h1 class="">All Locations</h1>
</div>

<section class="hospital-section container">
    <p class="head_des">
        Keeping with our legacy of innovation and expansion, we have outspread into four tertiary care hospitals, 8 outpatient medical centers across the Eastern Province.
    </p>

    <div class="location-content-wrapper">

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

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hospital-dammam.webp'; ?>" alt="Almana General Hospital Dammam"/>

            <div class="location-info">
                <h1>AGH Dammam</h1>

                <a href="<?php echo home_url('agh-dammam'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/dispensary-dammam.webp'; ?>" alt="Almana Medical Dispensary Dammam"/>

            <div class="location-info">
                <h1>Almana Oncology Center – Dammam</h1>

                <a href="<?php echo home_url('agh-aziziah-dammam'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hospital-aziziah.webp'; ?>" alt="Al Mana General Hospital Aziziah"/>

            <div class="location-info">
                <h1>AGH Aziziah Dammam</h1>

                <a href="<?php echo home_url('agh-aziziah-dammam'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hospital-jubail.webp'; ?>" alt="Almana General Hospital Jubail"/>

            <div class="location-info">
                <h1>AGH Jubail</h1>

                <a href="<?php echo home_url('agh-jubail'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/medical-center-jubail.webp'; ?>" alt="Almana Medical Center Jubail"/>

            <div class="location-info">
                <h1>AGH Jubail</h1>

                <a href="<?php echo home_url('agh-jubail2'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>

        <article class="location-card">
            <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hospital-hofuf.webp'; ?>" alt="Almana General Hospital Hofuf"/>

            <div class="location-info">
                <h1>AGH Hofuf</h1>

                <a href="<?php echo home_url('agh-hofuf'); ?>"><i class="fas fa-map-marker-alt"></i> View Detail</a>
                <a href=""><i class="fas fa-calendar-check"></i> Timings</a>
            </div>
        </article>
    </div>
</section>

<br><br>
<?php get_footer();?>
