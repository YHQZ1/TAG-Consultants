<?php /* Template Name: services*/ ?>
<?php get_header(); ?>
<!--Page Title-->

 <!--Page Title-->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image:url(<?php if( get_field('banner') ): ?>
					<?php the_field('banner'); ?>
				<?php endif; ?>)">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h2>Our Services</h2>
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
    <!--====== SERVICES PART START ======-->
    
     <section class="services-area">
          <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Services</h4>
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
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/services/enterprise_metworks.jpg" alt="TAG Consultants">
                        </div>
                        <div class="services-item-content">
                           
                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                              <p><?php the_excerpt(); ?></p>
                             <a href="<?php the_permalink(); ?>" class="btns">Read More <i class="fa fa-angle-double-right	
"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?> 
                
                
            </div>
        </div>
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
   
<style>
.services-area .services-item .services-item-content:hover i{
  background-image: linear-gradient(
90deg
, #ffffff 0%, #ffffff 100%) !important; 
}
.service-area{
margin-top:70px;
}.service-area .service-box .item{
padding:25px;
}
    .thumb img {
    border-radius: 10px;
    }
    .thumb img {
    height: 243px;
    }
    .service-area .service-box .item i {
    display: inline-block;
     font-size: 17px; 
    min-width: 50px;
    /* margin-right: 20px; */
    /* color: #086AD8; */

    }
    .services-area .services-item .services-item-content:hover  {
    margin-left: 16px;
    margin-right: 16px;
    margin-top: -30px;
    background: #ed3b1a;
    color: white;
    padding: 10px 20px 15px 23px !important;
    z-index: 2;
    position: relative;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    border: 2px solid white;
}
 .services-area .services-item .services-item-content:hover .title{
     color:white;
 }
 .services-area .services-item .services-item-content:hover a {
background-image: linear-gradient(
90deg
, #ffffff 0%, #ffffff 100%) !important; 
}
</style>

<?php
get_footer();
