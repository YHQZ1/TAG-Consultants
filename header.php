<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- ========== Meta Tags ========== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TAG Consultants Turnkey IT Infrastructure provider"> -->

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="<?php echo get_option('of_custom_favicon') ?>" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/themify-icons.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animate.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

 
 <?php wp_head(); ?>
<meta name="google-site-verification" content="kHkhRktB2IbGrN_cdV3zyq0cReB50AAv2754cL9E-WM" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9SNLH8P2D5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9SNLH8P2D5');
</script>

</head>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-theme text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <ul>
                         
                        <li>
                            <i class="fas fa-envelope-open"></i> <?php echo get_option('of_email') ?>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i><?php echo get_option('of_contact') ?> 


                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    <div class="info">
                        <ul>
                            <!--<li>
                                <i class="fas fa-clock"></i> Monday to Saturday – 10 am to 7:30 pm
                            </li> -->
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="<?php echo get_option('of_fb') ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_option('of_youtube') ?>">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo get_option('of_linked') ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default active-border navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                   <ul>
                        <li class="contact">
                            <i class="fas fa-phone"></i> 
                            <p>Call us today! <strong><?php echo get_option('of_contact') ?></strong></p>
                        </li>
                    </ul> 
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="https://tagconsultants.in/">
                        <img src="<?php echo get_option('of_logo') ?>" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <!--<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?> -->
                        
                        <li >
                            <a href="https://tagconsultants.in/"  >Home</a>
                            
                        </li>
                        <li>
                            <a href="about">About Us</a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="services" class="dropdown-toggle" data-toggle="dropdown">Our Services</a>
                            <ul class="dropdown-menu fadeOutUp" style="display: none; opacity: 1;">
                                <li><a href="enterprise-networks">Enterprise Networks</a></li>
                                <li><a href="unified-collaboration">Unified Collaboration</a></li>
                                <li><a href="safety-security">Safety & Security</a></li>
                                <li><a href="data-center-solution">Data Center Solution</a></li>
                                <li><a href="system-infrastructure">System Infrastructure</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="technical-services">Technical Services </a>
                                   <ul class="dropdown-menu fadeOutUp" style="display: none; opacity: 1;">
                                <li><a href="cloud-monitoring"> Cloud Monitoring</a></li>
                                <li><a href="security-monitoring"> Security Monitoring</a></li>
                                <li><a href="it-outsourcing-data-centres-fms">IT Outsourcing and Datacentres (FMS)</a></li>
                                <li><a href="annualmaintenancecontract">Annual Maintenance Contract (AMC)</a></li>
                                <li><a href="e-waste-management">E-Waste Management</a></li>
                                
                                    </ul> 
                                    
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li >
                            <a href="contact" >Contact Us</a>
                            
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
<style>
    @media (min-width: 1024px){
nav.navbar.bootsnav ul.nav > li > a.active {
    color: #2e7089;
}

}
nav.navbar.bootsnav ul.nav > li >a:hover{
    background-color: #327190  !important;
    color: #ffffff;
    height:50px;
}
nav.navbar.bootsnav ul.nav > li > a {
    padding: 15px 23px;
}
nav.navbar.bootsnav.menu-center ul.nav.navbar-center {
    float: none;
    margin: 33px auto;
    display: table;
    table-layout: fixed;
}
.bg-theme {
    background-color: #2e7089;
}
.banner-area .content {
    position: relative;
    z-index: 9;
    text-align:left !important;
}
nav.navbar.bootsnav li.dropdown ul.dropdown-menu > li > a{
        text-transform: none !important;
}
/*#mega-menu-wrap-primary-menu {
    background: transparent;
}*/
</style>