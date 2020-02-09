<?php
/*
* Template Name: Careers
*/
get_header();
$bannerimage = get_field('careers_banner_page');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>
<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
                    <h3>
                    <?php the_field('careers_main_heading'); ?>    
                    </h3>
                    <?php the_field('careers_descriptions'); ?> 
                    

                    <h4>Open Positions</h4>

                     <?php
                      if(have_rows('add_jobs')):  
					    while(have_rows('add_jobs')): 
						  the_row();
						  
						  $careerlink  	    = 	get_sub_field('apply_link'); 
						  
					$jobstatus = get_sub_field('job_status');	
					
					
                    if($jobstatus == 'active'){					
					 ?>
                    <h6><?php the_sub_field('position_title'); ?></h6>
                    <?php the_sub_field('position_description'); ?>
                    <p><a href="<?php echo $careerlink ; ?>" class="text-underline text-bold">Apply Now</a></p>
					<?php } ?>
                   <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->

<?php
get_footer();
?>