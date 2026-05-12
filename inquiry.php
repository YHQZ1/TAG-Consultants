<?php /* Template Name: inquiry*/ ?>
<?php get_header(); ?>
<!--Page Title-->
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light"
    style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner/contactus_landing-page-banner2.png);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <h2>Inquiry Page</h2>
            </div>
            <div class="col-lg-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="http://tagconsultants.in/"><i class="fas fa-home"></i> Home</a></li>

                    <li class="active">Inquiry Page</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="inquiry-section contact-area overflow-hidden default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 info">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner/contact.png"
                    alt="TAG Consultants">
            </div>

            <div class="col-lg-6 contact-form-box">
                <div class="content">
                    <div class="heading">
                        <h1>Inquiry Now</h1>

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
                </div>
            </div>




        </div>

    </div>

</div>
<!-- End Contact Area -->
<!-- End Breadcrumb -->
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