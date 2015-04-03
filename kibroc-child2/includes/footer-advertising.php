<?php $footeralias =  get_option('ad_footer_rot') ;?>
<div class="footer-adv">
		
		
	<?php /*if home page*/ if ( is_front_page() ) { ?>
	
		<?php if (get_option('adv_footer')=='Home page only') : ?>
				<div id="footer-ad"  style="float:<?php echo stripslashes(get_option('ad_footer_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_footer_size'))  ?>px !important ; overflow: hidden;">
				<?php echo stripslashes(get_option('ad_footer')); ?>
				</div>
		<?php endif; ?>
		
	<?php if (get_option('adv_footer')=='Entire site') : ?>
				<div id="footer-ad"  style="float:<?php echo stripslashes(get_option('ad_footer_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_footer_size'))  ?>px !important ; overflow: hidden;">
				<?php echo stripslashes(get_option('ad_footer')); ?>

				</div>
		<?php endif; ?>
		

	<?php  /*if not home page*/ } else { ?>
	
		<?php if (get_option('adv_footer')=='Entire site') : ?>
				<div id="footer-ad"  style="float:<?php echo stripslashes(get_option('ad_footer_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_footer_size'))  ?>px !important ; overflow: hidden;">
				<?php if (get_option('ad_footer_type')=='Static') : ?>
				<?php echo stripslashes(get_option('ad_footer')); ?>
				<?php endif; ?>
				<?php if (get_option('ad_footer_type')=='Rotating') : ?>
				<?php putRevSlider("$footeralias"); ?>
				<?php endif; ?>
				</div>
		<?php endif; ?>
		
		
		<?php if (get_option('adv_footer')=='Inner pages only') : ?>	
				<div id="footer-ad"  style="float:<?php echo stripslashes(get_option('ad_footer_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_footer_size'))  ?>px !important ; overflow: hidden;">
				<?php if (get_option('ad_footer_type')=='Static') : ?>
				<?php echo stripslashes(get_option('ad_footer')); ?>
				<?php endif; ?>
				<?php if (get_option('ad_footer_type')=='Rotating') : ?>
				<?php putRevSlider("$footeralias"); ?>
				<?php endif; ?>
				</div>
		<?php endif; ?>
		
	<?php } ?>
		
		
</div>