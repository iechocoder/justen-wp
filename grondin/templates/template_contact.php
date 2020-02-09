<?php
/*
* Template Name: Contact Us
*/
get_header();
$bannerimage = get_field('contact_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>
<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="article-detail-wrap mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><?php the_title(); ?></h1>
                <div class="sidebar">
                    <h6>Address</h6>
                    <p>
                        <?php the_field('add_address'); ?>
                    </p>
                    <p>
					<a target="_blank" href="<?php the_field('get_direction_link'); ?>">Get Directions</a>
					</p>

                    <h6>Phone</h6>
                    <p>
					<a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a>
					</p>

                    <h6>Hours</h6>
                    <p><?php the_field('working_hours'); ?></p>

                    <div class="side-sep-section">
                        <p><a href="<?php echo site_url(); ?>/<?php the_field('pit_and_quarry_hours_locations_link'); ?>">Pit and Quarry Hours & Locations</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="article-detail">
				<p>
                    <?php echo get_post_field('post_content', get_the_ID()); ?>
				</p>	


                    <h4>Send us a message</h4>
                    <div class="pt-lg-2 pt-3">
                        <?php
						$contactform = get_field('contact_form');
						?>
						<div class="row">
                            <div class="col-lg-9">
                                <?php echo do_shortcode($contactform); ?>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div><!-- article-detail-wrap -->

<?php
get_footer();
?>