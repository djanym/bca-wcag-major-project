<?php

set_page_title('Contact Us - ZZL Company');
require __DIR__ . '/header.php';
?>

    <div class="home-cover">
        <div class="site-container">
            <div class="cover-title">
                <p class="cover-title-text">CONTACT US</p>
                <p class="cover-title-text-2">GET IN TOUCH WITH OUR TEAM</p>
                <a href="#content" class="button">See Contact Details</a>
            </div>
        </div>
        <img src="<?php
        echo SITE_URL; ?>/assets/img/highlights-02.jpg">
    </div>

    <main class="main-content" id="content" role="banner" aria-required="true" aria-checked="mixed">
        <section class="white-box">
            <div class="site-container">
                <div class="content-column">
                    <h3>Contact ZZL Precast Concrete</h3>
                    <p style="color: #999;">We're here to answer any questions you may have about our precast concrete
                        products and services. Reach out to us and we'll respond as soon as we can.</p>
                    <p>Whether you need more information about our products, pricing details, or want to discuss a
                        custom project, our team is ready to help you find the perfect solution for your needs.</p>
                </div>
            </div>
        </section>

        <section class="white-box">
            <div class="site-container">
                <div class="content-column">
                    <h4>Our Location</h4>
                    <p>ZZL Precast Concrete</p>
                    <p>Pervomaisk 13a, Floreni, MD 2031</p>
                    <p>Phone: <a href="#" style="color: #777;">022-755-2515</a></p>
                    <p>Email: <a href="#" style="color: #777;">sales@example.com</a></p>

                    <h5>Business Hours</h5>
                    <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                    <p>Saturday: 9:00 AM - 2:00 PM</p>
                    <p>Sunday: Closed</p>
                </div>
                <div class="content-column text-center">
                    <h3>Send Us a Message</h3>
                    <div class="contact-form-container">
                        <?php require __DIR__ . '/form.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
require __DIR__ . '/footer.php';
