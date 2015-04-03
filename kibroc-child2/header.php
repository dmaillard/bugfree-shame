<?php global $cp_options; ?>
<div class="header">

		<div class="header_top">

				<div class="header_top_res">

					
			
				
				<div class="header_menu">

				<div class="header_menu_res">
<nav>
                <?php wp_nav_menu( array('theme_location' => 'primary', 'fallback_cb' => false,'link_after' => '', 'container' => false) ); ?>

</nav>			


<div class="socio">
				<ul>
				



				<?php	if( !get_option( "twitter_id") ) { } else { ?>	
				<li class="twito"><a  target="_blank"  href="http://www.twitter.com/<?php echo get_option('twitter_id'); ?>"></a></li>
				<?php } ?>
				<?php	if( !get_option( "facebook_id") ) { } else { ?>	
				<li class="facebook"><a  target="_blank"  href="http://www.facebook.com/<?php echo get_option('facebook_id'); ?>"></a></li>
				<?php } ?>
				<?php	if( !get_option( "linkedin_id") ) { } else { ?>	
				<li class="linkedin"><a  target="_blank"  href="http://www.linkedin.com/<?php echo get_option('linkedin_id'); ?>"></a></li>
				<?php } ?>
				<?php	if( !get_option( "gplus_id") ) { } else { ?>	
				<li class="google"><a  target="_blank"  href="http://plus.google.com/<?php echo get_option('gplus_id'); ?>"></a></li>
				<?php } ?>
				
				<?php	if( !get_option( "feedburner_url") ) { ?>
				<li class="rss"><a href="<?php echo appthemes_get_feed_url(); ?>"></a></li>
				<?php } else { ?>	
				<li class="rss"><a  target="_blank"  href="<?php echo get_option('feedburner_url'); ?>"></a></li>
				<?php } ?>
				</ul>
				</div>

	<p>
				<div class="logins">
				<?php echo cp_login_head(); ?>
				</div>
				</p>
				
    
				</div><!-- /header_menu_res -->

		</div><!-- /header_menu -->
		
		
		
		
		
<div class="headlat">

<div class="cont-head">
<div id="logo">

										<?php if (get_option('use_logo') != 'No') { ?>

										<?php if (get_option('logo_url')) { ?>
														<a href="<?php echo home_url('/'); ?>"><img class="cp_logo" src="<?php echo get_option('logo_url'); ?>" alt="<?php bloginfo('name'); ?>" class="header-logo" /></a>
												<?php } else { ?>
														<a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
												<?php } ?>

										<?php } else { ?>

												<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
												<div class="description"><?php bloginfo('description'); ?></div>

										<?php } ?>

								</div><!-- /logo -->







	<?php get_template_part( 'includes/theme', 'searchbar' ); ?>

	
<div class="clear"></div>

<div class="cont-head">



</div>
</div>		

<div class="clear"></div>


<div class="headerbot"></div>		
		
		
		

		</div><!-- /header_top_res -->

	</div><!-- /header_top -->
	
</div>



<?php if ( is_front_page() ) {
?>
<?php get_template_part( header, home ); ?>
<?php } else { 
 } ?>
 
 

