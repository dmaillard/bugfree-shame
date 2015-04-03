</div>



<style>	 
html, html {margin-top: 0px !important}
</style>	

<?php /*Footer advertising*/ get_template_part( 'includes/footer','advertising' ); ?>
<div id="backtotop"><a href="#"></a></div>
<script>
jQuery(document).ready(function(){
		var pxShow = 300;//height on which the button will show
		var fadeInTime = 1000;//how slow/fast you want the button to show
		var fadeOutTime = 1000;//how slow/fast you want the button to hide
		var scrollSpeed = 1000;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() >= pxShow){
				jQuery("#backtotop").fadeIn(fadeInTime);
			}else{
				jQuery("#backtotop").fadeOut(fadeOutTime);
			}
		});
		 
		jQuery('#backtotop a').click(function(){
			jQuery('html, body').animate({scrollTop:0}, scrollSpeed); 
			return false; 
		}); 
	});</script>

<div class="clear">

<?php global $cp_options; ?>
<div class="footer_menu">

				<div class="footer_menu_res">

						<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container' => false, 'menu_id' => 'footer-nav-menu', 'depth' => 1, 'fallback_cb' => false ) ); ?>

						<div class="clr"></div>

				</div><!-- /footer_menu_res -->

		</div><!-- /footer_menu -->

<div class="footer">



		<div class="footer_main">

				<div class="footer_main_res">

						<div class="dotted">

								<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar_footer') ) : else : ?> <!-- no dynamic sidebar so don't do anything --> <?php endif; ?>

								<div class="clr"></div>

						</div><!-- /dotted -->

						
						
						
						

				</div><!-- /footer_main_res -->

				
<div  class="footer-bot">				
<div class="footer_main_res">
				<div class="left"><p>&copy; <?php echo date_i18n('Y'); ?> <?php bloginfo('name'); ?>. <?php _e( 'All Rights Reserved.', APP_TD ); ?></p>

					
						</div>
						<div class="right">
								<p><a target="_blank" href="#" title="Discaimer">Disclaimer</a> </p>
						</div>

						<?php cp_website_current_time(); ?>
						
						
						
						<div class="clr"></div>
				
		</div><!-- /footer_main -->

</div><!-- /footer_main_res -->
</div><!-- /footer_bot -->
<?php get_template_part( 'includes/ft', 'st' ); ?> 

</div><!-- /footer -->
</div>