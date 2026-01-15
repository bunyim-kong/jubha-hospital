<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/about.css"/>

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100&icon_names=favorite,home,search,settings" rel="stylesheet" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=play_circle" />

<script src="https://unpkg.com/slim-select@latest/dist/slimselect.js"></script>
<link href="https://unpkg.com/slim-select@latest/dist/slimselect.css" rel="stylesheet">

<?php get_header();?>

<div class="header-page">
    <span><a href="<?php echo home_url('home'); ?>">Home</a> / About us / Our Culture</span>
    <h1 class="">Our Culture</h1>
</div>

<section class="vision-mission-section">
    <div class="container">
        <div class="vision-mission-wrapper">
            <div class="vm-card vision-card">
                <div class="vm-header">
                    <span class="vm-subtitle">Our Vision</span>
                    <h2 class="vm-title" style="color: var(--sec-color);">Shaping the Future of Healthcare</h2>
                </div>

                <div class="vm-content">
                    <p class="vision-quote">
                        “Enhance the lives of our customers and communities by delivering world-class integrated healthcare systems”
                    </p>
                </div>
            </div>

            <div class="vm-card mission-card">
                <div class="vm-header">
                    <span class="vm-subtitle">Our Mission</span>
                    <h2 class="vm-title">Driving Healthcare Excellence</h2>
                </div>

                <p class="mission-intro">We are passionate about the people and communities we serve and work tirelessly every day to:</p>

                <ul class="mission-list">
                    <li>Provide comprehensive care to prevent and treat illnesses</li>
                    <li>Drive innovations and education to lead & grow the healthcare community</li>
                    <li>Balance advanced procedures and modern technology with humanity and the traditions of caring and compassion</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="values-section">
    <div class="container">
        <div class="section-title">
            <span>Core Principles</span>
            <h2>Our Values</h2>
        </div>

        <div class="values-list">
            <div class="value-item">
                <div class="value-icon">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/integrity__1_.svg" alt="Integrity">
                </div>
                <div class="value-content">
                    <h4>Integrity</h4>
                    <p>We keep our work and deliver honest, ethical, and transparent actions and services.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-icon">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/values.svg" alt="Value of Trust">
                </div>
                <div class="value-content">
                    <h4>Value of Trust</h4>
                    <p>We establish and grow the worthiness of trust and demonstrate ability, reliability, and strength to build equity and the value of our brand.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-icon">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/compassion.svg" alt="Care">
                </div>
                <div class="value-content">
                    <h4>Care, Compassion & Collaboration</h4>
                    <p>We are stronger together in our determination to deliver excellence in care, hope and support to our patients and our internal and external customers.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-icon">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/respect_1.svg" alt="Respect">
                </div>
                <div class="value-content">
                    <h4>Respect</h4>
                    <p>We treat our diverse community with the dignity, confidentiality, and honesty they deserve.</p>
                </div>
            </div>

            <div class="value-item">
                <div class="value-icon">
                    <img src="https://ds4kyztv1rtw.cloudfront.net/uploads/patient.svg" alt="Excellence">
                </div>
                <div class="value-content">
                    <h4>Patient Focused Excellence</h4>
                    <p>Our patients and customers are the ultimate judge of our brand. We tirelessly ensure innovation and adaptation for world-class experiences.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>