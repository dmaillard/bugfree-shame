

<div class="content">

	<div class="content_botbg">

		<div class="content_res">

			<div id="breadcrumb">

				<?php if ( function_exists('cp_breadcrumb') ) cp_breadcrumb(); ?>

			</div>

			<!-- <div style="width: 105px; height:16px; text-align: right; float: left; font-size:11px; margin-top:-10px; padding:0 10px 5px 5px;"> -->
				<?php // if($reported) : ?>
					<!-- <span id="reportedPost"><?php _e( 'Post Was Reported', APP_TD ); ?></span> -->
				<?php // else : ?>
					<!--	<a id="reportPost" href="?reportpost=<?php echo $post->ID; ?>"><?php _e( 'Report This Post', APP_TD ); ?></a> -->
				<?php // endif; ?>
			<!-- </div> -->

			<div class="clr"></div>

			<div class="content_left">

				<?php do_action( 'appthemes_notices' ); ?>
				<?php appthemes_before_loop(); ?>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php appthemes_before_post(); ?>

						<?php appthemes_stats_update( $post->ID ); //records the page hit ?>

						<div class="shadowblock_out <?php cp_display_style( 'featured' ); ?>">

							<div class="shadowblock">

								<?php appthemes_before_post_title(); ?>

								<h1 class="single-listing"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

								<div class="clr"></div>

								<?php appthemes_after_post_title(); ?>

								<div class="pad5 dotted"></div>

								
								<?php if (get_option('adv_ad')=='Yes') : ?>
									<div id="ad-ad"><?php echo stripslashes(get_option('ad_ad')); ?></div>
									<div class="clear"></div>
								<?php endif; ?>
								
								
								
								<?php if ( get_post_meta($post->ID, 'cp_ad_sold', true) == 'yes' ) {
									?>
											<div class="solda"><span><?php _e( 'This item has been sold', APP_TD ); ?></span></div>
									<?php
										}
								?>
								
								
								<div class="bigright <?php cp_display_style( 'ad_single_images' ); ?>">

									<ul>

									<?php
										// grab the category id for the functions below
										$cat_id = appthemes_get_custom_taxonomy( $post->ID, APP_TAX_CAT, 'term_id' );

										

										// 3.0+ display the custom fields instead (but not text areas)
										cp_get_ad_details( $post->ID, $cat_id );
									?>

										<li id="cp_listed"><span><?php _e( 'Listed:', APP_TD ); ?></span> <?php echo appthemes_display_date( $post->post_date ); ?></li>
									<?php if ( $expire_date = get_post_meta( $post->ID, 'cp_sys_expire_date', true ) ) { ?>
										<li id="cp_expires"><span><?php _e( 'Expires:', APP_TD ); ?></span> <?php echo cp_timeleft( $expire_date ); ?></li>
									<?php } ?>

									</ul>

								</div><!-- /bigright -->


								<?php if ( $cp_options->ad_images ) { ?>

									<div class="bigleft">

										<div id="main-pic">

											<?php cp_get_image_url(); ?>

											<div class="clr"></div>

										</div>

										<div id="thumbs-pic">

											<?php cp_get_image_url_single( $post->ID, 'thumbnail', $post->post_title, -1 ); ?>

											<div class="clr"></div>

										</div>

									</div><!-- /bigleft -->

								<?php } ?>

								<div class="clr"></div>

								<?php appthemes_before_post_content(); ?>

								<div class="single-main">

									<?php
										// 3.0+ display text areas in content area before content.
										cp_get_ad_details( $post->ID, $cat_id, 'content' );
									?>

									<h3 class="description-area"><?php _e( 'Description', APP_TD ); ?></h3>

									<?php the_content(); ?>

									
									
									
			<?php if (get_option('adv_ad_bottom')=='Yes') : ?>
			<div id="ad-bottom" style="float:<?php echo stripslashes(get_option('ad_ad_bottom_float'))  ?> !important; width: <?php echo stripslashes(get_option('ad_ad_bottom_size'))  ?>px !important"><?php echo stripslashes(get_option('ad_ad_bottom')); ?></div>
			<div class="clear"></div>
			<?php endif; ?>



								</div>

								<?php appthemes_after_post_content(); ?>

							</div><!-- /shadowblock -->

						</div><!-- /shadowblock_out -->

						<?php appthemes_after_post(); ?>

					<?php endwhile; ?>

					<?php appthemes_after_endwhile(); ?>

				<?php else: ?>

					<?php appthemes_loop_else(); ?>

				<?php endif; ?>

				<div class="clr"></div>

				<?php appthemes_after_loop(); ?>

				<?php wp_reset_query(); ?>

				<div class="clr"></div>
				
			

				<?php comments_template( '/comments-ad_listing.php' ); ?>
				
				
				
					<div class="clr"></div>
<?php  if (get_option('enable_related_ads')=='Yes') : ?>	
<?php /*relatede ads*/ get_template_part( 'includes/related-ads' ); ?>	
<?php endif;?> 

			</div><!-- /content_left -->

			<?php get_sidebar( 'ad' ); ?>

			<div class="clr"></div>
			
		

		</div><!-- /content_res -->

	</div><!-- /content_botbg -->

</div><!-- /content -->
