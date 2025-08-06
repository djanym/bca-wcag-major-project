<?php

set_page_title('Our Services - ZZL Company');
require __DIR__ . '/header.php';
?>

    <div class="home-cover">
        <div class="site-container">
            <div class="cover-title">
                <p class="cover-title-text">OUR SERVICES</p>
                <p class="cover-title-text-2">SOLUTIONS FOR EVERY PROJECT</p>
                <a href="#content" class="button">See Services</a>
            </div>
        </div>
        <img src="<?php
        echo SITE_URL; ?>/assets/img/cover.png">
    </div>

    <main class="main-content" id="content">
        <section class="gray-box">
            <div class="site-container">
                <div class="content-column">
                    <h1>Comprehensive Precast Concrete Services</h1>
                    <p>ZZL offers a full range of precast concrete solutions for residential, commercial, and industrial
                        clients. Our experienced team delivers quality, reliability, and value on every project.</p>
                    <p>From septic tanks and retaining walls to custom concrete products, we provide both standard and
                        tailored solutions to meet your needs.</p>
                </div>
                <div class="content-column text-center">
                    <img src="<?php
                    echo SITE_URL; ?>/assets/img/highlights-01.jpg" width="600" height="300">
                </div>
            </div>
        </section>

        <section class="white-box">
            <div class="site-container">
                <div class="content">
                    <h2>Our Core Services</h2>
                    <ul>
                        <li><a href="#septic">Septic System Design &amp; Installation</a></li>
                        <li><a href="#retaining">Retaining Wall Construction</a></li>
                        <li><a href="#stormwater">Stormwater Management Structures</a></li>
                        <li><a href="#utility">Precast Utility Vaults & Enclosures</a></li>
                    </ul>
                    <p>
                        In addition to our core services, ZZL offers a wide variety of custom precast concrete solutions
                        and specialty products to meet the unique needs of every project. Whether you require tailored
                        components, expert consultation, or large-scale infrastructure support, our experienced team is
                        ready to help. If you have a specific requirement or would like to discuss your project in
                        detail, <a href="#quote-form">contact us using the form below</a> and we’ll be happy to assist
                        you.
                    </p>
                </div>
            </div>
        </section>

        <section class="gray-box" id="septic">
            <div class="site-container">
                <div class="content-column">
                    <h2>Septic System Design &amp; Installation</h2>
                    <p>Our team specializes in the design and installation of advanced septic systems for residential
                        and commercial properties. We handle everything from site assessment and system selection to
                        permitting and final installation, ensuring compliance with all local regulations.</p>
                    <ul>
                        <li>Site evaluation and soil testing</li>
                        <li>Custom system design for your property</li>
                        <li>Professional installation and inspection</li>
                        <li>Maintenance and repair services available</li>
                    </ul>
                </div>
                <div class="content-column text-center">
                    <img src="<?php
                    echo SITE_URL; ?>/assets/img/highlights-01.jpg" width="400" height="300">
                </div>
            </div>
        </section>

        <section class="white-box" id="retaining">
            <div class="site-container">
                <div class="content-column text-center">
                    <img src="<?php
                    echo SITE_URL; ?>/assets/img/highlights-02.jpg" width="400" height="300">
                </div>
                <div class="content-column">
                    <h2>Retaining Wall Construction</h2>
                    <p>We offer durable and attractive precast concrete retaining walls for landscaping, erosion
                        control, and structural support. Our solutions are engineered for strength and longevity, with a
                        variety of finishes and sizes to suit your project.</p>
                    <ul>
                        <li>Gravity and reinforced wall systems</li>
                        <li>Custom heights and finishes</li>
                        <li>Fast installation with minimal site disruption</li>
                        <li>Engineered for drainage and stability</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="gray-box" id="stormwater">
            <div class="site-container">
                <div class="content-column">
                    <h2>Stormwater Management Structures</h2>
                    <p>Our precast stormwater management products help control runoff and protect the environment. We
                        manufacture catch basins, manholes, and other structures to meet municipal and private
                        development needs.</p>
                    <ul>
                        <li>Catch basins and manholes</li>
                        <li>Oil-water separators</li>
                        <li>Custom drainage solutions</li>
                        <li>Meets local and federal standards</li>
                    </ul>
                </div>
                <div class="content-column text-center">
                    <img src="<?php
                    echo SITE_URL; ?>/assets/img/highlights-03.jpg" width="400" height="300">
                </div>
            </div>
        </section>

        <section class="white-box" id="utility">
            <div class="site-container">
                <div class="content-column text-center">
                    <img src="<?php
                    echo SITE_URL; ?>/assets/img/highlights-01.jpg" width="400" height="300">
                </div>
                <div class="content-column">
                    <h2>Precast Utility Vaults &amp; Enclosures</h2>
                    <p>We provide robust precast concrete vaults and enclosures for utilities, telecommunications, and
                        electrical infrastructure. Our products are designed for easy installation and long-term
                        protection of critical systems.</p>
                    <ul>
                        <li>Standard and custom vault sizes</li>
                        <li>Secure access hatches and covers</li>
                        <li>Weather and tamper resistant</li>
                        <li>Ideal for electrical, telecom, and water utilities</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="gray-box" id="quote-form">
            <div class="site-container content-centered">
                <div>
                    <h2>Request a Quote</h2>
                    <?php
                    require __DIR__ . '/form.php'; ?>
                </div>
            </div>
        </section>
    </main>

<?php
require __DIR__ . '/footer.php';
