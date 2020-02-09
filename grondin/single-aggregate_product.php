<?php
get_header();
$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
?>

<div class="services-top-content aggregate-detail">
   <?php
     while(have_posts()):
      the_post();	 
   ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap"><a href="/clients/justenwp/aggregate/">Back</a></div>
                <div class="side-photo">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <p><a href="http://adrianpottinger.com/clients/justenwp/wp-content/uploads/2019/11/PDF-FILE.pdf" class="link-download">Download Pricelist</a></p>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>

                    <h4>Common Uses</h4>
                    <?php the_field('common_uses_content'); ?>

                    <h4>Pricing & Availability</h4>
                    <?php the_field('pricing_availability_content'); ?>
                    
                    <h4>Delivery</h4>
                    <?php the_field('delivery_content'); ?>

                </div>
            </div>
        </div>
    </div>
	<?php  endwhile; ?>
	<?php wp_reset_query(); ?>
</div>

<?php get_template_part('template-parts/cta','aggregate'); ?>


<?php
get_footer();
?>