<?php
/*
* Template Name: About
*/
get_header();
$bannerimage = get_field('about_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>
<div class="atf-section" style="background: url(<?php echo $bannersrc[0]; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><?php the_title(); ?></h1>
                <div class="sidebar">
                    <ul>
					 <?php 
				   if(have_rows('add_sub_sections')):
				    while(have_rows('add_sub_sections')):
					 the_row();
				   ?>
                        <li><a href="#<?php the_sub_field('sub_section_name'); ?>"><?php the_sub_field('sub_section_name'); ?></a></li>
                  <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
                    <h3>
                        <?php the_field('about_main_heading'); ?>
                    </h3>
                        <?php the_field('about_main_content'); ?>
						<?php 
				   if(have_rows('add_sub_sections')):
				    while(have_rows('add_sub_sections')):
					 the_row();
				   ?>
				    		
                    <h4 id="<?php the_sub_field('sub_section_name'); ?>"><?php the_sub_field('sub_section_name'); ?></h4>
                    <?php the_sub_field('sub_section_content'); ?>
					<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->

<?php //get_template_part('template-parts/cta','form'); ?>

<?php  get_footer(); ?>
<script>
jQuery(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
    }, 1500);
});
</script>