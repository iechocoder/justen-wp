<?php
/*
* Template Name: Locations
*/
get_header();
$bannerimage =  get_field('location_banner_image');
$bannersrc   =  wp_get_attachment_image_src( $bannerimage, 'full' );
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
                   <?php  the_field('location_descriptions'); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->

<div class="operations-wrap">
    <div class="container">
        <?php 
		if(have_rows('add_locations_sections')):
		  while(have_rows('add_locations_sections')):
		   the_row();
		?>
		<h4><?php the_sub_field('location_section_title'); ?></h4>
        <div class="row">
            <?php 
			if(have_rows('add_locations')):
			  while(have_rows('add_locations')):
			   the_row();
			?>
			<div class="col-lg-3 col-md-6">
                <div class="operations-section">
                    <h6><?php the_sub_field('location_name'); ?></h6>
                    <p>
                        <?php the_sub_field('location_address'); ?>
                    </p>
                    <p><a href="<?php the_sub_field('location_get_direction_link'); ?>">Get Directions</a></p>
                    <p><?php the_sub_field('location_working_time'); ?></p>
                    <p>Sat: Call <a href="tel:<?php the_sub_field('location_phone'); ?>"><?php the_sub_field('location_phone'); ?></a> for hours</p>
                </div>
            </div>   
			<?php 
		endwhile;
		endif;
		?>
        </div>
        <?php 
		endwhile;
		endif;
		?>
        </div>
    </div>
</div><!-- operations-wrap -->

<?php
get_footer();
?>