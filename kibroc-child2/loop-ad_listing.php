<?php
/**
 * Main loop for displaying ads
 *
 * @package ClassiPress
 * @author AppThemes
 *
 */
global $cp_options;
?>

<?php appthemes_before_loop(); ?>


 <!-- grid/list view buttons-->
			<div class="view-cnt">
            <div id="list" class="list "><span></span></div>
			<div id="grid" class="grid"><span></span></div>
			</div>
<!-- grid/list buttons ends here-->
        <div class="clear lading"></div>
		


<?php if ( have_posts() ) : ?>


	<!-- conditional header ad starts here-->
	<?php if (get_option('adv_listings')=='Yes') : ?>
	<?php if (get_option('ad_listings_freq')=='0') : ?>
	 <div class="prod-cnt prod-box shadow Just-listed" >
	<div class="post-block-out featured adso">
	<div class="post-block">
	<div class="featured-ribbon"></div>
	<div class="post-left">
	<div class="listo"><?php echo'<a href=""><img class="attachment-medium" <img class="attachment-featured-thumbnail" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-130.jpg') . '" /></a>'; ?></div>
	<div class="grido"><?php echo'<a><img class="attachment-medium" <img class="attachment-featured-thumbnail" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-grid.jpg') . '" /></a>'; ?></div>
	</div>
	  

	<div class="post-right full">
	<p class="post-desc">
	<?php echo stripslashes(get_option('ad_listings')); ?>
	</p></div>
	<div class="clr"></div>
	</div>
	</div></div>	
	<?php endif; ?>
	 <?php endif;  $count = 1; ?>
	 

		
		
	 
    <?php while ( have_posts() ) : the_post(); ?>
    
        <?php appthemes_before_post(); ?>
		

		
     <div class="prod-cnt prod-box shadow Just-listed"  >

        <div class="post-block-out <?php cp_display_style( 'featured' ); ?>">
        
            <div class="post-block">
        
              <div class="post-left">
				

<?php /*sticky ribbon*/ if (get_option('enable_featured_style')=='Yes') : ?>			
 <?php if(is_sticky()) {?>
 
<?php if ( $cp_options->ad_images ) jts_ad_grid_thumbnail(); ?>
<?php } ?> 
<?php endif; /*end of sticky*/?>   


            <div class="listo"><?php if ( $cp_options->ad_images ) jt_ad_list_thumbnail(); ?></div>
			<div class="grido"><?php if ( $cp_options->ad_images ) jt_ad_grid_thumbnail(); ?></div>
                
					
                </div>
				
				
        			<div class="likes likes-<?php the_ID(); ?>"></div>
					<div class="socis">
						<div class="soci soci-<?php the_ID(); ?>">
				<ul>
					<li id="facebooks"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" >Facebook</a></li>
					<li id="twitters"><a href="http://www.twitter.com/home?status=<?php the_permalink(); ?>+<?php the_title(); ?> - <?php echo substr(get_the_excerpt(), 0,140); ?>" target="_blank" rel="nofollow">Twitter</a></li>
					<li id="googlepluss"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" >Google+</a></li>
				</ul>
					</div>
						</div>
				
   	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.likes-<?php the_ID(); ?>').toggle(function() {
  $('.soci-<?php the_ID(); ?>').animate({'left':'105px'});
}, function() {
 $('.soci-<?php the_ID(); ?>').animate({'left':'-100px'});
});
		});
	</script>


                <div class="<?php cp_display_style( array( 'ad_images', 'ad_class' ) ); ?>">
						
              

        <div class="clr ctl"></div>
		
<?php  /*sold tag*/ if (get_option('enable_sold_tag')=='Yes') : ?>	
<?php if (get_post_meta($post->ID, 'cp_ad_sold', true) == 'yes') : ?>
<div class="sold"><?php echo stripslashes(get_option('enable_sold_name')); ?></div>
<?php endif; ?>
<?php endif;  /*end sold tag*/ ?>	


   <?php appthemes_before_post_title(); ?>	
	
                <div class="listos"> <h3><a href="<?php the_permalink(); ?>"><?php if ( mb_strlen( get_the_title() ) >= 75 ) echo mb_substr( get_the_title(), 0, 60 ).'...'; else the_title(); ?></a></h3></div>
				<div class="gridos"> <h3><a href="<?php the_permalink(); ?>"><?php if ( mb_strlen( get_the_title() ) >= 55 ) echo mb_substr( get_the_title(), 0, 40 ).'...'; else the_title(); ?></a></h3></div>
                 
				 <div class="listos">
				 <div class="clr"></div>
				 <?php appthemes_after_post_title(); ?>
				 </div>
				
				  <?php //appthemes_after_post_title(); ?>

				  <div class="clr"></div>
                    
                  <?php appthemes_before_post_content(); ?>
        
                    <?php /*enable grid desc*/ //if (get_option('enable_cont_gridlist')=='Yes') : ?>
                    <div class="listos"><p class="post-desc"><?php echo cp_get_content_preview( 160 ); ?></p></div>
                  
	
				
				<div class="soci soci-<?php the_ID(); ?> listosa">
				<ul>
					<li id="facebooks"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" >Facebook</a></li>
					<li id="twitters"><a href="http://www.twitter.com/home?status=<?php the_permalink(); ?>+<?php the_title(); ?> - <?php echo substr(get_the_excerpt(), 0,140); ?>" target="_blank" rel="nofollow">Twitter</a></li>
					<li id="googlepluss"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" >Google+</a></li>
				</ul>
				</div>
		
<div class="additional">
	<?php appthemes_after_post_content(); ?>	
</div> 

<div class="clr"></div>
        
     </div>

	 <div class="post-med" >
	 <?php appthemes_get_profile_pic( get_the_author_meta('ID'), get_the_author_meta('user_email'), 23 ) ?>
	 <span class="auths"><?php the_author_posts_link(); ?></span>
	 <span><?php if ( $post->post_type == 'post' ) the_category(', '); else echo get_the_term_list( $post->ID, APP_TAX_CAT, '', ', ', '' ); ?></span>
	 </div>
                <div class="clr"></div>
        
            </div><!-- /post-block -->
          
        </div><!-- /post-block-out --> 
		
</div><!-- /prod box -->


<!-- conditional header ad starts here-->
<?php if (get_option('adv_listings')=='Yes') : ?>
<?php if ($count == get_option('ad_listings_freq')) : ?>
<div class="prod-cnt prod-box shadow Just-listed" >
	<div class="post-block-out featured adso">
		<div class="post-block">
			<div class="featured-ribbon"></div>
				<div class="post-left">
				
					<div class="listo"><?php echo'<a><img class="attachment-mediums" <img class="attachment-featured-thumbnail" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-130.jpg') . '" /></a>'; ?></div>
					<div class="grido"><?php echo'<a><img class="attachment-mediums" <img class="attachment-featured-thumbnail" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-grid.jpg') . '" /></a>'; ?></div>
  </div>
  
   <div class="post-right full">
  <p class="post-desc">
<?php echo stripslashes(get_option('ad_listings')); ?>

</p></div>
<div class="clr"></div>
 </div>

</div></div>
<?php endif; ?>
<!--Ad ends here-->
<?php endif; $count++; ?>
  
 <?php appthemes_after_post(); ?>
        
    <?php endwhile; ?>
    
    <?php appthemes_after_endwhile(); ?>

<?php else: ?>

    <?php appthemes_loop_else(); ?>

<?php endif; ?>

<?php appthemes_after_loop(); ?>
<?php wp_reset_query(); ?>