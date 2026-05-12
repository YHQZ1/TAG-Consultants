<?php /* Template Name: inquiry*/ ?>
<?php get_header(); ?>
<!--Page Title-->
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner/contactus_landing-page-banner2.png);">
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
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner/contact.png" alt="TAG Consultants">
                </div>

                <div class="col-lg-6 contact-form-box">
                    <div class="content">
                        <div class="heading">
                            <h1>Inquiry Now</h1>
                           
                        </div>
                        <form action="https://webhunt.store/themeforest/techa/assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="fname" name="name" placeholder="First Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="lname" name="name" placeholder="Last Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Message Here."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                      Submit Now
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
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
    .contact-area form input, .contact-area form textarea {
    border: 2px solid #2e6f88;
    }
    .contact-area form button {
    background: #2e7089;}

   
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
}</style>
    <?php
get_footer();