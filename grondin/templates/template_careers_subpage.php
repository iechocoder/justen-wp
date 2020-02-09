<?php
/*
* Template Name: Career Sub Pages
*/?>
<?php get_header(); the_post();?>
<?php global $post;

$bannerimage = get_field('careers_banner_page');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );


?>

<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            
              
            
                <div class="back-wrap"><a href="/clients/justenwp/careers/">Careers</a></div>
                <div class="sidebar">
                    <ul>
					<?php

					$args = array(
						'post_type'      => 'page',
						'posts_per_page' => 1,
						'order'          => 'ASC',
						'orderby'        => 'menu_order'
					 );


					$parent = new WP_Query( $args );

					if ( $parent->have_posts() ) : ?>

                   <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                        <li>
						<a href="<?php the_permalink(); ?>">
						<h1><?php the_title(); ?> </h1>
                        
						</a>
						</li>
                   <?php endwhile; endif; wp_reset_postdata(); ?>
                    </ul>
                 
                </div>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
                    <h3>
                    <?php the_field('careers_main_heading'); ?>    
                    </h3>
                    <?php the_field('careers_descriptions'); ?> 
                   
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->

<?php
get_footer();
?>