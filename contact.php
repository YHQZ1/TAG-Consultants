<?php /* Template Name: contact*/ ?>
<?php get_header(); ?>
<!--Page Title-->
    <!-- Start Breadcrumb 
    ============================================= -->
    
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image:url(<?php if( get_field('banner') ): ?>
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
                        
                           <?php echo do_shortcode('[contact-form-7 id="29" title="contact"]'); ?>

                                
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
                                                <span><?php the_field('address'); ?></span>
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
                                                <span style="color:black;"><a href="mailt:<?php the_field('email1'); ?>"><?php the_field('email1'); ?></a></span>
                                                <span><a href="mailt:<?php the_field('email2'); ?>"><?php the_field('email2'); ?></a></span>
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
                                                <span><a href="tel:<?php the_field('contact_number'); ?>"><?php the_field('contact_number'); ?></a></span>
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
        <?php the_field('google_map'); ?>
        
    </div>
    <!-- End Contact Area -->
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
}

</style>

<?php
get_footer();
