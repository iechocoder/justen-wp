<!--footer start -->
<div id="footer-wrap">
    <div class="container">
        <footer id="footer">
            
            <div class="footer-top">
                <div class="footer-logo">
                    <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt=""></a>
                    <span>Celebrating 60 Years</span>
                </div>
                <div class="footer-right">
                    <div class="footer-links footerlinksdesktop">
                       
                         <?php
						 wp_nav_menu( array( 'menu' => 'footermenu', 'container' => false ) );
					?>
                    
                     <?php
					if ( has_nav_menu( 'top' ) ) {
						 wp_nav_menu( array( 'theme_location' => 'top', 'container' => false ) );
					} 
					?>
                    </div>
                    <div class="footer-links footerlinksmobile">
                         <?php
						 wp_nav_menu( array( 'menu' => 'footermenu', 'container' => false ) );
					?>
                    <?php
					if ( has_nav_menu( 'top' ) ) {
						 wp_nav_menu( array( 'theme_location' => 'top', 'container' => false ) );
					} 
					?>
                    </div>
                    <div class="footer-info">
                        <?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
									<?php dynamic_sidebar( 'footer-1' ); ?>
							<?php } ?>
                    </div>
                </div>
            </div>

            <div class="footer-bot-wrap">
                <div class="footer-bot">
                    <div class="copyright">© 2019 R.J. Grondin & Sons. Site by 50FISH </div>
                    <div class="access"><a href="#">Employee Access</a></div>
                    <div>
                        <div class="social-section">
                            
							<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
									<?php dynamic_sidebar( 'footer-2' ); ?>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
</div>
<!--footer end -->

</div><!--container-fluid -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>
<style>
.gallery{
display: flex;
    flex-wrap: wrap;
}
figure.gallery-item {
    width: 33.33%;
    padding: 0 10px 20px;
}
input#gform_submit_button_1 {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
	font-weight: bold;
    padding: 12px 40px;
	border: 1px solid transparent;
	font-size: 1rem;
    line-height: 1.5;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.gform_body .large {
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 2px solid #ced4da;
    border-radius: .25rem;
}
</style>