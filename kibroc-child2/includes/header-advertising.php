<?php $headeralias =  get_option('ad_header_rot') ;?>
	<?php /*if home page*/ if ( is_front_page() ) { ?>
	
	
		<?php if (get_option('adv_header')=='Home page only') : ?>
		<div class="header-adv">
				<div id="header-ad"  style="float:<?php echo stripslashes(get_option('ad_header_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_header_size'))  ?>px !important ; overflow: hidden;">
			
				<?php echo stripslashes(get_option('ad_header')); ?>
			
				</div>
		</div>
		<?php endif; ?>
		
		
	<?php if (get_option('adv_header')=='Entire site') : ?>
	<div class="header-adv">
				<div id="header-ad"  style="float:<?php echo stripslashes(get_option('ad_header_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_header_size'))  ?>px !important ; overflow: hidden;">
				<?php echo stripslashes(get_option('ad_header')); ?>
				</div>
	</div>
	<?php endif; ?>
		

	<?php  /*if not home page*/ } else { ?>
	
		<?php if (get_option('adv_header')=='Entire site') : ?>
		<div class="header-adv">
				<div id="header-ad"  style="float:<?php echo stripslashes(get_option('ad_header_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_header_size'))  ?>px !important ; overflow: hidden;">
					<?php echo stripslashes(get_option('ad_header')); ?>
				
				</div>
	</div>		
		<?php endif; ?>
		
		
		<?php if (get_option('adv_header')=='Inner pages only') : ?>
	<div class="header-adv">		
				<div id="header-ad"  style="float:<?php echo stripslashes(get_option('ad_header_float'))  ?> ;width: <?php echo stripslashes(get_option('ad_header_size'))  ?>px !important ; overflow: hidden;">
				<?php echo stripslashes(get_option('ad_header')); ?>
				
				</div>
	</div>		
		<?php endif; ?>
	
	<?php } ?>
		
		
