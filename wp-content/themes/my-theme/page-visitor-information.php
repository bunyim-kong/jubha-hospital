<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/visitor.css"/>

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100&icon_names=favorite,home,search,settings" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=play_circle" />

<script src="https://unpkg.com/slim-select@latest/dist/slimselect.js"></script>
<link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet">

<?php get_header();?>


<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / Patient Information / Visitor Information </span>
    <h1 class="">Visitor Information</h1>
</div>




    <section class="info-section">
    <div class="container">
        <div class="info-grid">
            
            <div class="info-text">
               <h2 class="section-title">Visitor Information</h2>
                
                <div class="hours-card">
                    <div class="hours-header">
                        <span class="clock-icon"> clock</span>
                        <h4>Visiting Hours</h4>
                    </div>
                    <p>From <strong>7:00 am to 10:00 pm</strong> daily in coordination with the patient’s care team.</p>
                </div>

                <ul class="guideline-list">
                
                        <p>Children under the age of <strong>14</strong> must be accompanied by an adult at all times.</p>
                        <p>All visitors are kindly requested to follow the hospital visitation guidelines for patient safety.</p>
            </div>

            <div class="info-image">
                <div class="image-wrapper">
                    <picture>
                        <source media="(min-width: 1200px)" srcset="https://ds4kyztv1rtw.cloudfront.net/uploads/visitor-information/JAAN8387.jpg">
                        <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/visitor-information/s_JAAN8387.jpg" alt="Visitor Information">
                    </picture>
                    <div class="image-accent"></div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php get_footer();?>


