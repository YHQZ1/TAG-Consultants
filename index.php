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
                    <div class="slider-thumb bg-cover" style="background-image: url(<?php echo get_option('of_slider1') ?>);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="content">
                                            <h3 style=" font-weight:700;"><?php echo get_option('of_slidertext1') ?> </h3>
                                            <h2 data-animation="animated slideInLeft"><?php echo get_option('of_slidertitle1') ?></h2>
                                            <p class="animated slideInLeft">
                                        <?php echo get_option('of_slidersubtitle1') ?>
                                            </p>
                                            <!--<a data-animation="animated fadeInUp" class="btn circle btn-light border btn-md" href="#">About Us</a>-->    

                                            <div class="bottom">
                                                <a class="btn btn-theme effect btn-md animated slideInLeft" href="about">About Us</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(<?php echo get_option('of_slider2') ?>);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="content">
                                           <h3 style=" font-weight:700;"><?php echo get_option('of_slidertext2') ?> </h3>
                                            <h2 data-animation="animated slideInLeft"><?php echo get_option('of_slidertitle2') ?></h2>
                                            <p class="animated slideInLeft">
                                        <?php echo get_option('of_slidersubtitle2') ?>
                                            </p>
                                            <div class="bottom">
                                                <a class="btn btn-theme effect btn-md animated slideInLeft" href="about">About Us</a>
                                                <a class="btn btn-theme effect btn-md animated slideInLeft" href="contact">Contact Us </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(<?php echo get_option('of_slider3') ?>);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="content">
                                            <h3 style=" font-weight:700;"><?php echo get_option('of_slidertext3') ?> </h3>
                                            <h2 data-animation="animated slideInLeft"><?php echo get_option('of_slidertitle3') ?></h2>
                                            <p class="animated slideInLeft">
                                        <?php echo get_option('of_slidersubtitle3') ?>
                                            </p>
                                            <div class="bottom">
                                              
                                                <a class="btn btn-theme effect btn-md animated slideInLeft" href="contact">Contact Us </a>
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
				<?php while (have_posts()) : the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="services-item mt-80">
                        <div class="services-thumb">
                            <?php the_post_thumbnail() ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/services/enterprise_metworks.jpg" alt="Tag Consultants1">
                        </div>
                        <div class="services-item-content">
                           
                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                              <p><?php the_excerpt(); ?></p>
                             <a href="<?php the_permalink(); ?>" class="btns">Read More <i class="fa fa-angle-double-right	
"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?> 
                 <a class="main-btn" href="services">View More<i class="flaticon-right-arrow"></i></a>
            </div>
        </div>
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    	<!-- Start Testimonials 
    ============================================= -->
    <section class="testimonials-areas bg_cover" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner/testimonials-bg.jpg);">
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
                   <?php $port = new WP_Query( array( 'post_type' => 'testimonial') );
                            while ( $port->have_posts() ) : $port->the_post(); ?>			
                    <!-- Single Item -->
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="thumb">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/team/user.png" alt="Tag Consultant">
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

                               <?php echo do_shortcode('[contact-form-7 id="133" title="inquiry"]'); ?>
                           
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
                            <div id="tab2" class="tab-pane fade"><?php echo get_option('of_location') ?>
							
								
							</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact Area -->
<?php
get_footer();
