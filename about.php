<?php /* Template Name: about*/ ?>
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
                    <h2>About Us</h2>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="http://tagconsultants.in/"><i class="fas fa-home"></i> Home</a></li>
                        
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Features Area 
    ============================================= -->
    <div class="feature-area bg-half bg-gray overflow-hidden default-padding">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>10 years of experience</h5>
                        <h2> A Premier Turnkey IT Infrastructure Consultants in Ahmedabad, Gujarat</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>
                       TAG Consultants  is a Turnkey IT Infrastructure provider based in Ahmedabad offering 360 degree Information Technology Solutions right from Consulting, Design, Deployment and Technical Support.  TAG Consultants  is now positioned as a full-service Information Technology Solutions design, implementation and management company.
                        </p>
<br>
                        <p>Quality work & accurate service is our prime motto. We have large numbers of satisfied customers in various parts of India and outside India. We don’t believe in physical boundaries for delivering solutions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb wow">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/about/banner-about-us-page.jpg" alt="IT Infrastructure">
                        </div>
                    </div>
                    <div class="col-lg-6 content">
                        <div class="content-box">
                            <div class="item">
                               
                                <div class="info">
                                    
                                    <p>
                                    Our range of customers span across the verticals of Pharmaceuticals and Healthcare, Manufacturing, Government, IT & ITES, Education, Automobile as well as Small and Medium Enterprises.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                               
                                <div class="info">
                                   
                                    <p>
                                 In our endeavor to provide leading edge State of the Art solutions, TAG Consultants leverages with industry leading technology OEMs like Cisco, Dell EMC, Ruckus, HP Aruba, Microsoft, Sophos (Cyberoam), Sonicwall, Fortinet, Commscope, Molex, D-Link, Polycom, Kramer, Crestron, Panasonic, Samsung, Matrix, Avaya and more as technology keeps evolving.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Area -->
     <!-- Start Who We Area 
    ============================================= -->
    <div class="who-we-area-area bg-dark text-light">
        <div class="container-fluid">
            <div class="who-we-area-box">
                <div class="row">
                    <div class="col-lg-4 thumb bg-cover" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/about/our-mission.jpg);"></div>
                    <div class="col-lg-8 info">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 item">
                                <h4>Our Mission</h4>
                                <h2 class="text-blur">Mission</h2>
                                <p>
                               To consistently create value for our stakeholders, by providing solutions which enable
our customers to achieve excellence and sustainable competitive edge.

                                </p>
                             
                            </div>
                            <div class="col-lg-4 col-md-6 item">
                                <h4>Our Vision</h4>
                                <h2 class="text-blur">Vision</h2>
                                <p>
                               Our vision is to be a leading consulting firm operating worldwide. Our success is measured by the value we deliver to clients, the quality of the staff we employ, and our strength and spirit as a firm. They guide our decision making, our interactions with our clients and our relationships with each other.
                                </p>
                               
                            </div>
                            <div class="col-lg-4 col-md-6 item">
                                <h4>Our Core Values </h4>
                                <h2 class="text-blur">Values</h2>
                                <p>
                               We are committed to providing smart and valuable solutions. Not only do we believe in the solutions that we deliver through our products and services, we leverage them to foster a unified workforce experience across all of our locations
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Who We Area Area -->
     <!-- Start Clients 
    ============================================= -->
   
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

<style>
    .feature-area .feature-box .content .content-box{
        padding :28px !important;
    }
    @media only screen and (max-width: 767px){
    .who-we-area-area .thumb {
    min-height: 350px;
    display: block; 
    }
    }
    .clients-area .clients-carousel img {
    height:90px;
}
</style>

<?php
get_footer();
