<!-- /* home banner spot-->
<?php if (get_option('adv_home_banner')=='Yes') : ?>	
				<div class="home-banner"><div id="banner-s" style="float:<?php echo stripslashes(get_option('ad_home_float'))  ?> !important; overflow: hidden;">
				<?php echo stripslashes(get_option('home_banner')); ?>
				</div></div>
<?php endif; ?>
<!-- /* end of home spot-->





 <!-- grid/list view buttons-->
			<div class="view-cnts">

 <!-- /* First home tab-->
	<?php  switch (get_option('tab_1')) {

            case "Nothing": ?>
            <?php break; case "Just-listed": ?>
            <li class="cat-active" category="<?php echo get_option('tab_1', '');  ?>"><a><span class="big"><?php echo get_option('tab_1_name', '');?></span></a></li>
            <?php break; case "Popular": ?>
            <li  class="cat-active" category="<?php echo get_option('tab_1', '');  ?>"><a><span class="big"><?php echo get_option('tab_1_name', '');?></span></a></li>
            <?php break; case "Random": ?>
			<li  class="cat-active" category="<?php echo get_option('tab_1', '');  ?>"><a><span class="big"><?php echo get_option('tab_1_name', '');?></span></a></li>
			<?php break;case "Ad-categories": ?>
			<li  class="cat-active" category="<?php echo get_option('tab_1', '');  ?>"><a><span class="big"><?php echo get_option('tab_1_name', '');?></span></a></li>
			<?php break; }
		
	?>
<!-- /* end of tab-->
 
 <!-- /* 2nd home tab-->
	<?php  switch (get_option('tab_2')) {

            case "Nothing": ?>
            <?php break; case "Just-listed": ?>
            <li category="<?php echo get_option('tab_2', '');  ?>"><a><span class="big"><?php echo get_option('tab_2_name', '');?></span></a></li>
            <?php break; case "Popular": ?>
            <li  category="<?php echo get_option('tab_2', '');  ?>"><a><span class="big"><?php echo get_option('tab_2_name', '');?></span></a></li>
            <?php break; case "Random": ?>
			<li  category="<?php echo get_option('tab_2', '');  ?>"><a><span class="big"><?php echo get_option('tab_2_name', '');?></span></a></li>
			<?php break;case "Ad-categories": ?>
			<li category="<?php echo get_option('tab_2', '');  ?>"><a><span class="big"><?php echo get_option('tab_2_name', '');?></span></a></li>
			<?php break; }
		
	?>
<!-- /* end of tab-->


 <!-- /* 3rd home tab-->
	<?php  switch (get_option('tab_3')) {

            case "Nothing": ?>
            <?php break; case "Just-listed": ?>
            <li category="<?php echo get_option('tab_3', '');  ?>"><a><span class="big"><?php echo get_option('tab_3_name', '');?></span></a></li>
            <?php break; case "Popular": ?>
            <li category="<?php echo get_option('tab_3', '');  ?>"><a><span class="big"><?php echo get_option('tab_3_name', '');?></span></a></li>
            <?php break; case "Random": ?>
			<li  category="<?php echo get_option('tab_3', '');  ?>"><a><span class="big"><?php echo get_option('tab_3_name', '');?></span></a></li>
			<?php break;case "Ad-categories": ?>
			<li  category="<?php echo get_option('tab_3', '');  ?>"><a><span class="big"><?php echo get_option('tab_3_name', '');?></span></a></li>
			<?php break; }
		
	?>
<!-- /* end of tab-->





 <!-- /* 4th home tab-->
	<?php  switch (get_option('tab_4')) {

            case "Nothing": ?>
            <?php break; case "Just-listed": ?>
            <li category="<?php echo get_option('tab_4', '');  ?>"><a><span class="big"><?php echo get_option('tab_4_name', '');?></span></a></li>
            <?php break; case "Popular": ?>
            <li category="<?php echo get_option('tab_4', '');  ?>"><a><span class="big"><?php echo get_option('tab_4_name', '');?></span></a></li>
            <?php break; case "Random": ?>
			<li  category="<?php echo get_option('tab_4', '');  ?>"><a><span class="big"><?php echo get_option('tab_4_name', '');?></span></a></li>
			<?php break;case "Ad-categories": ?>
			<li  category="<?php echo get_option('tab_4', '');  ?>"><a><span class="big"><?php echo get_option('tab_4_name', '');?></span></a></li>
			<?php break; }
		
	?>
<!-- /* end of tab-->
 <div id="list" class="list "><span></span></div>
 <div id="grid" class="grid"><span></span></div>
<!-- grid/list buttons ends here-->
	</div>



<div class="undertab">

<div style="display: block;" id="Just-listed" class="prod-cnt prod-box shadow Just-listed" ><span class="colour"><?php _e( 'Classified Ads', APP_TD ); ?> / <strong><span class="colour"><?php _e( 'Just Listed', APP_TD ); ?></span></strong></span></div>
<div style="display: none;" id="Popular" class="prod-cnt prod-box shadow Popular" ><span class="colour"><?php _e( 'Classified Ads', APP_TD ); ?> / <strong><span class="colour"><?php _e( 'Most Popular', APP_TD ); ?></span></strong></span></div>
<div style="display: none;" id="Random" class="prod-cnt prod-box shadow Random" ><span class="colour"><?php _e( 'Classified Ads', APP_TD ); ?> / <strong><span class="colour"><?php _e( 'Random', APP_TD ); ?></span></strong></span></div>
<div style="display: none;" id="Ad-categories" class="prod-cnt prod-box shadow Ad-categories" ><span class="colour"><strong><?php _e( 'Ad categories', APP_TD ); ?> </strong></span></div>



</div>

<div class="clear"></div>