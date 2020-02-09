<?php
/*
* Template Name: Projects
*/
get_header();
$bannerimage = get_field('projects_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>

<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="services-top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Projects</h1>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h3>
                       <?php
					    the_field('projects_main_heading');
					   ?>
                    </h3>
                    <?php
					    the_field('projects_content');
					   ?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="articles-wrap">
    <div class="container">
        <div class="article-title">
            <!--<h2>Recent Projects</h2>-->
        </div>
        <div class="row">
             <?php
		 $args = array(
        'post_type' => 'projects',
		'posts_per_page' => '-1',
        'post_status' => 'publish',
        
        );
        $prject_query = new WP_Query($args);
		if($prject_query->have_posts()):
		   while($prject_query->have_posts()):
               $prject_query->the_post();	
        $pojectstatus = get_field('select_project_status');		
        if($pojectstatus == 'inprogress'){
			$progress = 'In-Progress';
		}	
          else {
			  $progress = '';
		  }		
		 ?>
		 
			<div class="col-lg-3 col-md-6">
              
              <a href="<?php the_permalink(); ?>">
                <div class="article-section">
                    <div class="article-photo">
					  
					  <?php
                       if(!empty($progress)){
					  ?>
                        <div class="project-status"><?php echo $progress; ?></div>
					   <?php } ?>	
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                       
				   </div> 
                    <h3><?php the_title(); ?>chool</h3>
                    <p>
					<?php
					$terms = get_the_terms( $post->ID , 'project_type' );
					foreach ( $terms as $term ) {
					echo $term->name;
					}
					?>
					</p>
                </div>
                </a>  
                
            </div>
          <?php endwhile; endif; ?>	
		<?php wp_reset_query(); ?>
        </div>
    </div>
</div><!-- articles-wrap -->


<?php  get_template_part('template-parts/cta','projects');

get_footer();
?>