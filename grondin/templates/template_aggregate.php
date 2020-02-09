<?php
/*
* Template Name: Aggregate Product
*/
get_header();
$bannerimage = get_field('aggregate_banner_image');
$bannersrc   = wp_get_attachment_image_src( $bannerimage, 'full' );
?>

<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="services-top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><?php the_field('aggregate_left_heading'); ?></h1>
                <p><a href="<?php the_field('aggregate_left_download_pdf'); ?>" class="link-download">Download Pricelist</a></p>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h3>
                       <?php the_field('aggregate_right_heading'); ?>
                    </h3>
                    <?php the_field('aggregate_content'); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="articles-wrap">
    <div class="container">
        <div class="article-title">
            <!--<h2>Aggregate Type</h2>-->
        </div>
		<?php
          $cat_args = array(
    'orderby'       => 'term_id', 
    'order'         => 'ASC',
    'hide_empty'    => true, 
);

$terms = get_terms('aggregate_type', $cat_args);
		?>
        <div class="row">
		<?php
		foreach($terms as $taxonomy){
			
         $term_slug = $taxonomy->name;
		 $term_id	= $taxonomy->term_id;
		 $category_link = get_category_link( $term_id );
		 $category_image = get_field('aggregate_type_category_image','aggregate_type_'. $term_id);
		 ?>
            <div class="col-lg-3 col-md-6">
                <div class="article-section">
				<a href="<?php echo esc_url( $category_link ); ?>">
                    <div class="article-photo">
                        <img src="<?php echo $category_image; ?>" alt="">
                    </div> 
                    <h3><?php echo $term_slug; ?></h3>
				</a>	
                </div>
            </div>
		<?php } ?>	
        </div>
    </div>
</div><!-- articles-wrap -->

<?php get_template_part('template-parts/cta','aggregate'); ?>

<?php get_footer(); ?>