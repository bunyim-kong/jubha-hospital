<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/outpatient.css"/>

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100&icon_names=favorite,home,search,settings" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=play_circle" />

<script src="https://unpkg.com/slim-select@latest/dist/slimselect.js"></script>
<link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet">

<?php get_header();?>


<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / Patient Information / Outpatient</span>
    <h1 class="">Outpatient</h1>
</div>


  <section class="outpatient-section">
    <div class="container">
        <div class="outpatient-wrapper">
            <div class="outpatient-content">
                        <h1 class="title">Outpatient</h1>
                <div class="abstract-card">
                    <div class="status-indicator">
                        <span class="dot pulse"></span> Outpatient
                    </div>
                    <p>Outpatient clinics open between the hours of 8:00 am to 10:00 pm</p>
                </div>
            </div>

            <div class="outpatient-visual">
                <div class="image-frame">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="https://ds4kyztv1rtw.cloudfront.net/uploads/outpatient2/JAAN8268.jpg">
                        <source media="(min-width: 992px)" srcset="https://ds4kyztv1rtw.cloudfront.net/uploads/outpatient2/l_JAAN8268.jpg">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/outpatient2/s_JAAN8268.jpg" alt="Outpatient Care">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>


