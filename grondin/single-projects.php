<?php
get_header(); the_post();
$bannerimage = get_field('project_main_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
$prev_url      = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
?>

<div class="atf-section" style="background: url(<?php echo $bannersrc[0]; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap"><a href="<?php echo $prev_url; ?>">Projects</a></div>
                <div class="sidebar">
                    <h6>Location</h6>
                    <p><?php the_field('project_location'); ?></p> 
                    <h6>Date</h6>
                    <p><?php the_field('project_date'); ?></p>
                    <h6>Services Used</h6>
					
					<?php /*?><?php
					 $servicelink  	    = 	get_field('project_services_used'); 
					 $serviceid   	    = 	url_to_postid( $servicelink );
					 $servicetitle	    = 	get_the_title( $serviceid );
					?>
                    <p><a href="<?php echo $servicelink; ?>" class="text-underline"><?php echo $servicetitle; ?></a></p><?php */?>
                   
                   
                   <?php 

					$projectdetail = get_field('project_services_used');
					
					if( $projectdetail ): ?>
						<ul>
						<?php foreach( $projectdetail as $post): // variable must be called $post (IMPORTANT) ?>
							<?php setup_postdata($post); ?>
						
                                  <p><a href="<?php the_permalink(); ?>" class="text-underline"><?php the_title(); ?></a></p>
							
                           
						<?php endforeach; ?>
						</ul>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
                   
                   
                   
                   
                   
                   
                    <h6>Awards</h6>
                    <p><?php the_field('awards'); ?></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
                    <h2><?php /*?><?php the_field('project_title'); ?><?php */?> <?php the_title(); ?></h2>
                   <?php /*?><?php the_field('project_description'); ?><?php */?>
                     <?php the_content(); ?>
                   
                    <!--<div class="gallery-section">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="gallery-item"><a href="#"><img src="assets/images/photo.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>-->
					
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->



<?php  get_template_part('template-parts/cta','projects');

get_footer();
?>