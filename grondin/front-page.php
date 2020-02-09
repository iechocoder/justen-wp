<?php
/**
 * The main template file
 */

get_header();
$bannerimage = get_field('main_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>
<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->


<div class="box-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box-black">
                    <h4><?php the_field('btf_top_heading'); ?></h4>
                    <h2><?php the_field('btf_main_heading'); ?></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-content">
                    <?php the_field('btf_content'); 
					$pagelink  	= get_field('btf_about_link'); 
					$pageid    	= url_to_postid( $pagelink );
					$pagetitle 	= get_the_title( $pageid );
					?>
                    <p><strong><a href="<?php echo $pagelink; ?>"><?php echo $pagetitle; ?></a></strong></p>
                </div>
            </div>
        </div>
    </div>
</div><!-- box-wrap -->

<div class="articles-wrap">
    <div class="container">
        <div class="article-title">
            <h2>Recent Projects</h2>
        </div>
        <div class="row">
		 <?php
		 $args = array(
        'post_type' => 'projects',
		'posts_per_page' => '3',
        'post_status' => 'publish',
        
        );
        $prject_query = new WP_Query($args);
		if($prject_query->have_posts()):
		   while($prject_query->have_posts()):
               $prject_query->the_post();
        $projectstatus = get_field('select_project_status');			   
		 ?>
         
            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>">
                <div class="article-section">
                    <div class="article-photo">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
						<?php 
						if ($projectstatus == 'inprogress'){
						?>
                        <div class="project-status">In-Progress</div>
						<?php } ?>
                    </div> 
                    <h3><?php the_title(); ?></h3>
                    <?php
					$terms = get_the_terms( $post->ID , 'project_type' );
					foreach ( $terms as $term ) {
					echo $term->name;
					}
					?>
                </div>
                </a>
            </div>
		<?php endwhile; endif; ?>	
		<?php wp_reset_query(); ?>
        </div>
    </div>
</div><!-- articles-wrap -->


<div class="section-wrap">
    <div class="container">
	<?php
	$serviceimage   = get_field('services_image');
	$serviceimage   = wp_get_attachment_image_src( $serviceimage, 'full' );
	?>
        <div class="section-wrap-in">
            <div class="section-photo"><img src="<?php echo $serviceimage[0]; ?>" alt=""></div>
            <div class="section-info">
                <h2><?php the_field('services_heading'); ?></h2>
                <?php the_field('services_content'); ?>
                <ul>
				 <?php 
				   if(have_rows('add_services')):
				    while(have_rows('add_services')):
					 the_row();
				    $servicelink  	    = 	get_sub_field('services_page_link'); 
                    $serviceid   	    = 	url_to_postid( $servicelink );
					$servicetitle	    = 	get_the_title( $serviceid );
				 ?>
                    <li><a href="<?php echo $servicelink; ?>"><?php echo $servicetitle; ?></a></li>
				<?php endwhile; endif; ?>	
                </ul>
            </div>
        </div>
    </div>
</div><!-- section-wrap -->


<div class="articles-wrap article-secondary">
    <div class="container">
        <div class="article-title">
            <h2><?php the_field('material_sales_heading'); ?></h2>
            <p><?php the_field('material_sales_sub_heading'); ?></p>
        </div>
        <div class="row">
            <?php 
				   if(have_rows('add_material')):
				    while(have_rows('add_material')):
					 the_row();
				 ?>
			
			<div class="col-lg-2 col-md-4 col-6">
                <a href="<?php the_sub_field('material_link_detail'); ?>">
                <div class="article-section">
                    <div class="article-photo">
					<img src="<?php the_sub_field('material_image'); ?>" alt="">
					</div> 
                    <h3><?php the_sub_field('material_name'); ?></h3>
                </div>
                </a>
            </div>
			<?php endwhile; endif; ?>
			
        </div>
    </div>
</div><!-- articles-wrap -->

<div class="section-wrap section-reverse">
    <div class="container">
        <div class="section-wrap-in">
            <div class="section-photo"><img src="<?php the_field('career_image'); ?>" alt=""></div>
            <div class="section-info">
                <h2><?php the_field('careers_heading'); ?></h2>
                <?php the_field('careers_content'); ?>
                <ul>
                    <li><a href="<?php the_field('career_page_link'); ?>">View Openings</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- section-wrap -->


<div class="articles-wrap">
    <div class="container">
        <h2>Follow Along</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="article-section">
                    <div class="article-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/follow-1.png" alt=""></div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="article-section">
                    <div class="article-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/follow-2.png" alt=""></div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="article-section">
                    <div class="article-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/follow-3.png" alt=""></div> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="article-section">
                    <div class="article-photo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/follow-4.png" alt=""></div> 
                </div>
            </div>
        </div>
    </div>
</div><!-- articles-wrap -->

<?php get_footer(); ?>