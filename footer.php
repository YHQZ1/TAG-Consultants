<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */
?>

<footer class="bg-dark text-light">
    <div class="fixed-shape">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/map.svg" alt="IT Infrastructure">
    </div>
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="<?php echo get_option('of_custom_favicon') ?>" alt="Logo" style="float:left;">
                        <h4 class="widget-title" style="margin-top: 10px;">TAG CONSULTANTS</h4>
                        <br>
                        <p><?php echo get_option('of_compnayab') ?></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul>
                            <li><a href="https://tagconsultants.in/">Home</a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="services">Our Services</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Services</h4>
                        <ul>
                            <li><a href="enterprise-networks">Enterprise Networks</a></li>
                            <li><a href="unified-collaboration">Unified Collaboration</a></li>
                            <li><a href="safety-security">Safety & Security</a></li>
                            <li><a href="data-center-solution">Data Center Solution</a></li>
                            <li><a href="system-infrastructure">System Infrastructure</a></li>
                            <li><a href="technical-services">Technical Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item">
                        <h4 class="widget-title">Contact Info</h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <strong>Registered Office:</strong>
                                    Satyapath Dezire
                                    <br>
                                    <br>
                                    <strong>Branch Address:</strong>
                                    1 Pancham Bungalows,
                                    Behind Soniya Apartment,
                                    PT College Road,
                                    Paldi, Ahmedabad - 380007
                                </li>
                                <li>
                                    <strong><i class="fas fa-envelope-open"></i> Email:</strong>
                                    <a
                                        href="mailto:<?php echo get_option('of_emailline1') ?>"><?php echo get_option('of_emailline1') ?></a>
                                    <br>
                                    <a
                                        href="mailto:<?php echo get_option('of_emailline2') ?>"><?php echo get_option('of_emailline2') ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="download">
                            <h5><i class="fas fa-phone"></i> Contact</h5>
                            <a
                                href="tel:<?php echo get_option('of_phone1') ?>"><?php echo get_option('of_phone1') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright" style="text-align:center;">
                        <p>Copyright &copy; <?php echo date("Y"); ?> TAG Consultants. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.12.4.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/popper.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/equal-height.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.appear.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.easing.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/modernizr.custom.13711.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/progress-bar.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/count-to.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/YTPlayer.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootsnav.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

</body>

</html>
<?php wp_footer(); ?>