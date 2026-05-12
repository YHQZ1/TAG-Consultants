<?php /* Template Name: contact*/ ?>
<?php get_header(); ?>
<!--Page Title-->
<!-- Start Breadcrumb 
    ============================================= -->

<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image:url(<?php if (get_field('banner')): ?>
                    <?php the_field('banner'); ?>
                <?php endif; ?>)">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Contact Us</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="http://tagconsultants.in/"><i class="fas fa-home"></i> Home</a></li>

                    <li class="active"><?php the_title() ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-area overflow-hidden default-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 contact-form-box">
                <div class="content">
                    <div class="heading">

                        <h4><strong>Looking for an IT Solution, Reach out to us now –</strong></h4>

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
                            $to = 'info@tagconsultants.in'; // <-- CHANGE THIS to the actual email address that should receive the inquiries!
                    
                            $subject = 'New Website Inquiry from: ' . $name;
                            $body = "You have received a new inquiry from the website.\n\n";
                            $body .= "Name: $name\n";
                            $body .= "Email: $email\n";
                            $body .= "Phone: $phone\n\n";
                            $body .= "Message:\n$message\n";

                            $headers = array('Reply-To: ' . $name . ' <' . $email . '>');

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
                    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST" class="contact-form">
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


                    <!-- Alert Message -->


                </div>
            </div>

            <div class="col-lg-5 info">
                <div class="contact-tabs">
                    <h2><strong>Reach Us</strong></h2>
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
                                            <span>1 Pancham Bungalows, Behind Soniya Apartment, PT College Road, Paldi, Ahmedabad - 380007</span>
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
                                            <span style="color:black;"><a
                                                    href="mailto:<?php the_field('email1'); ?>"><?php the_field('email1'); ?></a></span>
                                            <span><a
                                                    href="mailto:<?php the_field('email2'); ?>"><?php the_field('email2'); ?></a></span>
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
                                            <span><a
                                                    href="tel:<?php the_field('contact_number'); ?>"><?php the_field('contact_number'); ?></a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>
    <br>
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.688452186002!2d72.5597110753131!3d22.99848117919065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e850951536ee9%3A0x655278440afd9143!2sPancham%20Bunglows!5e0!3m2!1sen!2sin!4v1778602670207!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

</div>
<!-- End Contact Area -->
<style>
    .contact-area form input,
    .contact-area form textarea {
        border: 2px solid #2e6f88;
    }

    .contact-area form button {
        background: #2e7089;
    }


    .heading h1 {
        font-weight: 600;
    }

    .heading h1::after {
        position: absolute;
        left: 256px;
        top: 6%;
        content: "";
        height: 2px;
        width: 30px;
        background: #2e6f88;
        margin-top: -1px;
    }

    .contact-tabs .tab-content ul li:hover i {
        color: #ec6046 !important;
    }

    .contact-tabs .tab-content ul li :hover i {
        background: #ec6046;
        color: white !important;
    }
</style>

<?php
get_footer();
