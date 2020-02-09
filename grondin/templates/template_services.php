<?php
/*
* Template Name: Services
*/
get_header();
$bannerimage = get_field('main_services_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>
<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="services-top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Services</h1>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h3>
                    <?php the_field('service_heading'); ?>    
                    </h3>
                    <?php the_field('service_content'); ?>   
                </div>
            </div>
        </div>
    </div>
</div>



<div class="articles-wrap">
    <div class="container">
        <!--<div class="article-title">
            <h2>Our Services</h2>
        </div>-->
        <div class="row">
		    <?php 
				   if(have_rows('add_services_pages')):
				    while(have_rows('add_services_pages')):
					 the_row();
				    $servicelink  	    = 	get_sub_field('service_page'); 
					$serviceid   	    = 	url_to_postid( $servicelink );
					$servicetitle	    = 	get_the_title( $serviceid );
					$servicesimage      = wp_get_attachment_image_src( get_post_thumbnail_id( $serviceid), 'single-post-thumbnail' );
				 ?>
            <div class="col-lg-3 col-md-6">
			<a href="<?php echo $servicelink ; ?>">
                <div class="article-section">
                    <div class="article-photo">
                        <img src="<?php echo $servicesimage['0']; ?>" alt="">
                    </div> 
                    <h3><?php echo $servicetitle; ?></h3>
                </div>
			</a>	
            </div>
			
            <?php endwhile; endif; ?>
            
        </div>
    </div>
</div><!-- articles-wrap -->

<?php 

get_template_part('template-parts/cta','services');

get_footer();
?>