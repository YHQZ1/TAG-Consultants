<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- Start Banner 
    ============================================= -->
<div class="banner-area top-pad-60-responsive border-shadow text-center content-less text-large">
    <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
            <div class="carousel-item active">
                <div class="slider-thumb bg-cover"
                    style="background-image: url(<?php echo get_option('of_slider1') ?>);"></div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="content">
                                        <h3 style=" font-weight:700;"><?php echo get_option('of_slidertext1') ?> </h3>
                                        <h2 data-animation="animated slideInLeft">
                                            <?php echo get_option('of_slidertitle1') ?>
                                        </h2>
                                        <p class="animated slideInLeft">
                                            <?php echo get_option('of_slidersubtitle1') ?>
                                        </p>
                                        <!--<a data-animation="animated fadeInUp" class="btn circle btn-light border btn-md" href="#">About Us</a>-->

                                        <div class="bottom">
                                            <a class="btn btn-theme effect btn-md animated slideInLeft"
                                                href="about">About Us</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider-thumb bg-cover"
                    style="background-image: url(<?php echo get_option('of_slider2') ?>);"></div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="content">
                                        <h3 style=" font-weight:700;"><?php echo get_option('of_slidertext2') ?> </h3>
                                        <h2 data-animation="animated slideInLeft">
                                            <?php echo get_option('of_slidertitle2') ?>
                                        </h2>
                                        <p class="animated slideInLeft">
                                            <?php echo get_option('of_slidersubtitle2') ?>
                                        </p>
                                        <div class="bottom">
                                            <a class="btn btn-theme effect btn-md animated slideInLeft"
                                                href="about">About Us</a>
                                            <a class="btn btn-theme effect btn-md animated slideInLeft"
                                                href="contact">Contact Us </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="slider-thumb bg-cover"
                    style="background-image: url(<?php echo get_option('of_slider3') ?>);"></div>
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content">
                                        <h3 style=" font-weight:700;"><?php echo get_option('of_slidertext3') ?> </h3>
                                        <h2 data-animation="animated slideInLeft">
                                            <?php echo get_option('of_slidertitle3') ?>
                                        </h2>
                                        <p class="animated slideInLeft">
                                            <?php echo get_option('of_slidersubtitle3') ?>
                                        </p>
                                        <div class="bottom">

                                            <a class="btn btn-theme effect btn-md animated slideInLeft"
                                                href="contact">Contact Us </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!-- End Banner -->
<!-- Star About Area
    ============================================= -->
<div class="about-area inc-shape default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src=" <?php echo get_option('of_aimg1') ?>" alt="Thumb">
                    <img src="<?php echo get_option('of_aimg2') ?>" alt="IT Infrastructure">
                    <div class="overlay">
                        <img src="<?php echo get_option('of_aimg3') ?>" alt="Tag Consultants">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 info">
                <div class="services-content mt-95">
                    <span>About Us</span>
                    <h3 class="title"><?php echo get_option('of_intro1') ?></h3>

                </div>
                <p>
                    <?php echo get_option('of_para1') ?> .
                </p>
                <p><?php echo get_option('of_para2') ?></p>
                <a class="main-btn" href="about">About Us<i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->




<!--====== SERVICES PART START ======-->

<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4>Our Services</h4>
                    <h2>What we do</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1200px;">
        <div class="row justify-content-center">

            <?php query_posts('category_name=services&posts_per_page'); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="services-item mt-80">
                        <div class="services-thumb">
                            <?php the_post_thumbnail() ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/services/enterprise_metworks.jpg"
                                alt="Tag Consultants1">
                        </div>
                        <div class="services-item-content">

                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btns">Read More <i class="fa fa-angle-double-right	
"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <a class="main-btn" href="services">View More<i class="flaticon-right-arrow"></i></a>
        </div>
    </div>
</section>

<!--====== SERVICES PART ENDS ======-->
<!-- Start Testimonials 
    ============================================= -->
<section class="testimonials-areas bg_cover"
    style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner/testimonials-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="section-title text-center">
                    <span>Client Testimonials</span>
                    <h3 class="title"><strong>What our clients say</strong> </h3>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="testimonials-area carousel-shadow default-padding">
    <div class="container">
        <div class="testimonial-items">
            <div class="testimonial-carousel owl-carousel owl-theme">
                <?php $port = new WP_Query(array('post_type' => 'testimonial'));
                while ($port->have_posts()):
                    $port->the_post(); ?>
                    <!-- Single Item -->
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="thumb">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/team/user.png"
                                        alt="Tag Consultant">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="info col-lg-9">
                                <p><?php the_content(); ?>

                                </p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="provider">
                                    <h4><?php the_title(); ?> </h4>

                                </div>
                            </div>
                        </div>
                    </div><?php endwhile; ?>
                <!-- End Single Item -->

            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->
<!-- Start Clients 
    ============================================= -->

<!-- End Clients Area -->

<!-- Start Features 
    ============================================= -->
<div class="features-area overflow-hidden bg-gray default-padding">
    <!-- Fixed Shpae  -->
    <div class="fixed-shape shape left bottom">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/shape/3.png" alt="Shape">
    </div>
    <!-- End Fixed Shpae  -->
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-5 why-us">
                <div class="services-content mt-95">

                    <h3 class="title"><Strong><?php echo get_option('of_whytitle') ?></Strong></h3>
                    <span>"<?php echo get_option('of_whysubtitle') ?> "</span><br>
                    <p><?php echo get_option('of_whycontent') ?></p>

                </div>

            </div>
            <div class="col-lg-7 features-box text-center">
                <div class="row">

                    <!-- Item Grid -->
                    <div class="col-lg-6 col-md-6 item-grid">
                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-select"></i>
                            <h5><a href="#"><?php echo get_option('of_s1') ?></a></h5>
                            <p>
                                <?php echo get_option('of_s1c') ?>
                            </p>
                        </div>
                        <!-- End Single Item -->
                        <div class="item-grid">
                            <!-- Single Item -->
                            <div class="item">
                                <i class="flaticon-interview"></i>
                                <h5><a href="#"><?php echo get_option('of_s2') ?></a></h5>
                                <p>
                                    <?php echo get_option('of_s2c') ?>
                                </p>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <!-- End Item Grid -->

                    <!-- Item Grid -->
                    <div class="col-lg-6 col-md-6 tops ">
                        <!-- Single Item -->
                        <div class="item">
                            <i class="flaticon-cloud-storage"></i>
                            <h5><a href="#"><?php echo get_option('of_s3') ?></a></h5>
                            <p>
                                <?php echo get_option('of_s3c') ?>
                            </p>
                        </div>
                        <!-- End Single Item -->

                    </div>
                    <!-- End Item Grid -->

                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Features Area -->


<!-- Start Fun Factor Area
    ============================================= -->
<!-- End Fun Factor Area -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-area overflow-hidden default-padding faq-area default-padding">
    <div class="container">
        <div class="row">

            <div class="form col-lg-6 ">
                <div class="appoinment-form wow fadeInUp">
                    <div class="heading">
                        <h4>Inquire Now</h4>
                    </div>

                    <?php
                    // Custom Contact Form Processing
                    $form_status = '';

                    if (isset($_POST['custom_submit'])) {
                        // Securely sanitize inputs
                        $name = sanitize_text_field($_POST['c_name']);
                        $email = sanitize_email($_POST['c_email']);
                        $phone = sanitize_text_field($_POST['c_phone']);
                        $message = sanitize_textarea_field($_POST['c_message']);

                        // Basic Validation
                        if (empty($name) || empty($email) || empty($message)) {
                            $form_status = '<div style="color: #ed3b1a; border: 1px solid #ed3b1a; padding: 10px; margin-bottom: 15px; background: #fff;">Please fill in all required fields.</div>';
                        } elseif (!is_email($email)) {
                            $form_status = '<div style="color: #ed3b1a; border: 1px solid #ed3b1a; padding: 10px; margin-bottom: 15px; background: #fff;">Invalid email address.</div>';
                        } else {
                            // --- SETUP EMAIL RECEIVER HERE ---
                            $to = 'info@tagconsultants.in'; // <-- CHANGE THIS to the actual email address!
                    
                            $subject = 'New Website Inquiry from: ' . $name;
                            $body = "You have received a new inquiry from the website.\n\n";
                            $body .= "Name: $name\n";
                            $body .= "Email: $email\n";
                            $body .= "Phone: $phone\n\n";
                            $body .= "Message:\n$message\n";

                            $headers = array('From: TAG Website <info@tagconsultants.in>', 'Reply-To: ' . $name . ' <' . $email . '>');

                            // Send Email using WordPress built-in mailer
                            if (wp_mail($to, $subject, $body, $headers)) {
                                $form_status = '<div style="color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin-bottom: 15px; background: #d4edda;">Thank you! Your message has been sent successfully.</div>';
                            } else {
                                $form_status = '<div style="color: #ed3b1a; border: 1px solid #ed3b1a; padding: 10px; margin-bottom: 15px; background: #fff;">There was a problem sending your message. Please try again later.</div>';
                            }
                        }
                    }
                    ?>

                    <?php echo $form_status; ?>
                    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST"
                        class="contact-inquiry-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input class="form-control" name="c_name" placeholder="Full Name *" type="text"
                                        required
                                        style="width: 100%; padding: 12px; border: 2px solid #2e6f88; border-radius: 0px; box-shadow: none;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input class="form-control" name="c_email" placeholder="Email Address *"
                                        type="email" required
                                        style="width: 100%; padding: 12px; border: 2px solid #2e6f88; border-radius: 0px; box-shadow: none;">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input class="form-control" name="c_phone" placeholder="Phone Number" type="text"
                                        style="width: 100%; padding: 12px; border: 2px solid #2e6f88; border-radius: 0px; box-shadow: none;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group comments" style="margin-bottom: 20px;">
                                    <textarea class="form-control" name="c_message" placeholder="Your Message *"
                                        required
                                        style="width: 100%; padding: 12px; border: 2px solid #2e6f88; border-radius: 0px; box-shadow: none; height: 140px; resize: vertical;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="custom_submit"
                                    style="background: #2e7089; color: white; padding: 12px 35px; border: none; border-radius: 0px; cursor: pointer; font-weight: 600; text-transform: uppercase;">
                                    Submit Inquiry
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-lg-6 info">
                <div class="contact-tabs">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                Address
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#tab2" data-toggle="tab" class="nav-link">
                                Google Maps
                            </a>
                        </li>
                    </ul>
                    <div id="tabsContent" class="tab-content">
                        <div id="tab1" class="tab-pane fade active show">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Our Location
                                            <span><?php echo get_option('of_context') ?></span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Send Us Mail
                                            <span><?php echo get_option('of_emailline1') ?></span>
                                            <span><?php echo get_option('of_emailline2') ?></span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Call Us
                                            <span><?php echo get_option('of_phone1') ?></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.688452186002!2d72.5597110753131!3d22.99848117919065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e850951536ee9%3A0x655278440afd9143!2sPancham%20Bunglows!5e0!3m2!1sen!2sin!4v1778602670207!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact Area -->
<div class="alliances-area default-padding" style="background-color: #f4f5f7;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading" style="margin-bottom: 40px;">
                <h2 style="font-weight: 700; color: #02042B; text-transform: uppercase;">Our Alliances</h2>
                <div style="height: 2px; width: 40px; background: #2e6f88; margin: 10px auto 0;"></div>
            </div>
        </div>

        <div class="row text-center">

            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-4 col-xs-6"
                style="padding: 20px; background: #ffffff; border: 1px solid #e2e8f0; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 120px;">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clients/cisco-partner.png"
                    alt="Cisco Partner" style="max-width: 100%; height: auto;">
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-4 col-xs-6"
                style="padding: 20px; background: #ffffff; border: 1px solid #e2e8f0; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 120px;">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clients/cisco-meraki.png"
                    alt="Cisco Meraki" style="max-width: 100%; height: auto;">
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-4 col-xs-6"
                style="padding: 20px; background: #ffffff; border: 1px solid #e2e8f0; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 120px;">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clients/fortinet.png" alt="Fortinet"
                    style="max-width: 100%; height: auto;">
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-4 col-xs-6"
                style="padding: 20px; background: #ffffff; border: 1px solid #e2e8f0; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 120px;">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clients/hpe-aruba.png"
                    alt="HPE Aruba" style="max-width: 100%; height: auto;">
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-4 col-xs-6"
                style="padding: 20px; background: #ffffff; border: 1px solid #e2e8f0; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 120px;">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clients/samsung.png" alt="Samsung"
                    style="max-width: 100%; height: auto;">
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-sm-4 col-xs-6"
                style="padding: 20px; background: #ffffff; border: 1px solid #e2e8f0; text-align: center; display: flex; align-items: center; justify-content: center; min-height: 120px;">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/clients/dell.png" alt="Dell"
                    style="max-width: 100%; height: auto;">
            </div>

        </div>
    </div>
</div>
<?php
get_footer();
