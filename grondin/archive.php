<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grondin
 */

get_header();
global $post;


$prev_url      = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$previoupageid = url_to_postid( $prev_url );
$prevtitle     = get_the_title( $previoupageid );

$obj = get_queried_object();
$term_id       =  $obj->term_id;
$bannerimage   =  get_field('aggregate_banner_image','142');
$bannersrc     =  wp_get_attachment_image_src( $bannerimage, 'full' );
$category_desc = get_field('aggregate_type_description','aggregate_type_'. $term_id);
?>

	<div class="atf-section" style="background: url(<?php echo $bannersrc['0']; ?>) center bottom no-repeat;"></div>
<!-- atf-section -->

<div class="services-top-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="back-wrap">
                <a href="<?php echo $prev_url;  ?>">
                <?php echo $prevtitle;  ?>
                </a>
                </div>
                <div class="sidebar">
                   
                   <?php  
                    $terms = get_terms(array(
        			'taxonomy' => 'aggregate_type',
        			'hide_empty' => false,
       				 'order' => 'ASC'
    				));
					$category = get_queried_object();
					?>

              	  <ul>
								<?php 
                                    foreach ($terms as $term) {
                                
                                        $title = $term->name;
                                        $term_link = get_category_link($term->term_id);?>
                         				<li <?php if( $term->term_id == $category->term_id) {  ?> class="active" <?php } else {} ?>>
                                        <a href="<?php echo $term_link;?>"><?php echo $title; ?></a>
                                        </li>
                  
                   
                         <?php }?>
                 </ul>  
          
                    
                </div>
                <p><a href="http://adrianpottinger.com/clients/justenwp/wp-content/uploads/2019/11/PDF-FILE.pdf" class="link-download">Download Pricelist</a></p>
            </div>
            <div class="col-md-8">
                <div class="service-content">
                    <h2><?php the_archive_title(); ?></h2>
					<?php the_archive_description( '<h3>', '</h3>' );  ?>
                    <?php echo $category_desc; ?>


                    <div class="articles-wrap">
                        <div class="">
                            <div class="row">
							 <?php
                              if(have_posts()):
							   while(have_posts()):
							      the_post();
							 ?>
							
                                <div class="col-lg-4 col-md-6">
								 <a href="<?php the_permalink(); ?>">
                                    <div class="article-section">
                                        <div class="article-photo">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        </div> 
                                        <h3><?php the_title(); ?></h3>
                                    </div>
									</a>	
                                </div>
							
							<?php endwhile; endif; ?>	
                            </div>
                        </div>
                    </div><!-- articles-wrap -->


                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/cta','aggregate'); ?>

<?php
get_footer();