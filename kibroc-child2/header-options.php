<link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>" type="image/x-icon" />
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
  document.documentElement.className+=' ie10';
  } 
  </script><!--<![endif]-->
  
<style>
	body {
	<?php if( !get_option('background_color') ) {} else {?>
	background: #<?php echo get_option('background_color')?> !important;
	<?php }?>	
	<?php if( !get_option('background_image') ) {} else {?>
	background: url("<?php echo get_option('background_image')?>") <?php echo get_option('background_repeat')?>  !important;
	<?php }?>	
	<?php if( !get_option('background_attach') ) {} else { ?>
	background-attachment: <?php echo get_option('background_attach')?> !important;
	<?php }?>	
	     }
	 <?php if( !get_option('footer_font_color') ) {} else { ?>
	#footer-widget ul li a, #footer a { color: #<?php echo get_option('footer_font_color')?> !important;}
	<?php }?>	
	<?php if( !get_option('footer_font_color_hover') ) {} else {?>
	#footer-widget ul li a:hover, #footer a:hover { color: #<?php echo get_option('footer_font_color_hover')?> !important;}
	<?php }?>	

	<?php if( !get_option('background_color') ) {} else {?>
	.circle-search {background-color: #<?php echo get_option('background_color')?> !important;}
	<?php }?>	
	   
	<?php if (get_option('override_patern')=='Yes') : ?>
	 body {background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('paterns')?>.png) repeat !important;}
	<?php endif; ?>
			
		


		
			
<?php if ( !get_option('top_header_color')) {} else {?>
				.container .header_menu { background-color: #<?php echo get_option('top_header_color')?> !important}
			
<?php }?>

<?php if ( !get_option('header_color')) {} else {?>
				.cont-all { background-color: #<?php echo get_option('header_color')?> !important}
			
<?php }?>

<?php if ( !get_option('header_background_image')) {} else {?>
				.cont-all { background-image: url('<?php echo get_option('header_background_image')?>') !important}
			
<?php }?>




<?php if ( !get_option('footer_background_color')) {} else {?>
				.footer_main { background-color: #<?php echo get_option('footer_background_color')?> !important}
			
<?php }?>

<?php if ( !get_option('bottom_footer_color')) {} else {?>
				.footer-bot { background-color: #<?php echo get_option('bottom_footer_color')?> !important}
			
<?php }?>



<?php if ( !get_option('footer_border_color')) {} else {?>
				.footer_main, .footer-bot  { border-color: #<?php echo get_option('footer_border_color')?> !important}
			
<?php }?>

<?php if ( !get_option('footer_background_image')) {} else {?>
				.footer_main { background-image: url('<?php echo get_option('footer_background_image')?>') !important}
			
<?php }?>





<?php if( !get_option('color_link') ) {} else {?>
	a{color: #<?php echo get_option('color_link')?> }
<?php }?>

<?php if( !get_option('color_hover') ) {} else {?>
	a:hover{color: #<?php echo get_option('color_hover')?>}
<?php }?>
	
	
<?php if( !get_option('menu_font_color') ) {} else {?>
	.header_menu_res ul.menu li a , .separator {color: #<?php echo get_option('menu_font_color')?>
<?php }?>
	
<?php if( !get_option('menu_font_color_hover') ) {} else {?>
	.header_menu_res ul.menu li a:hover, .header_menu_res ul li.current_page_item a{color: #<?php echo get_option('menu_font_color_hover')?>}
<?php }?>
	
	
<?php if( !get_option('footer_font_color') ) {} else {?>
	.footer_main_res div.column ul li a, .footer_main_res div.column , .footer_main_res div.column p {color: #<?php echo get_option('footer_font_color')?> }
<?php }?>
	
<?php if( !get_option('footer_font_color_hover') ) {} else {?>
	.footer_main_res div.column ul li a:hover, .header_menu_res ul li.current_page_item a{color: #<?php echo get_option('footer_font_color_hover')?> }
<?php }?>			

<?php if( !get_option('heading_footer_font') ) {} else {?>
	.footer_main_res div.column h2 {color: #<?php echo get_option('heading_footer_font')?>}
<?php }?>
	


	<?php if (get_option('main_layout') != 'left') { ?>
	  .content_right { float: right ;   border-left: 1px solid #EAE6E6 ;}
	  .content_right .shadowblock_out { }
	  .content_left {float: left;}
	  
<?php } else { ?>
.shadowblockdir h2.styled-h {margin-left: -25px;padding: 5px 8px;}
.shadowblockdir h2.styled-h:before {display:none}
.content_right {float:left;}
<?php }?>

<?php if( !get_option('background_featured') ) {} else {?>
.shadow .featured { background: #<?php echo get_option('background_featured')?>;}
<?php }?>
	



<?php  switch (get_option('featured_icons')) {

                case "Default": ?>
				
				
				
                <?php break;

                case "star1": ?>

.featured-ribbon {margin: -2px 0 0 -2px; height: 30px; width: 30px; background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
                <?php break;

				
				
				   case "none": ?>
			.featured-ribbon { background: none !important;}
                <?php break;
				
				
                case "sponsored": ?>
			.featured-ribbon { background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
                <?php break;

                case "featured": ?>
				.featured-ribbon { width: 85px ; height: 83px; background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
                <?php break;

                case "premium": ?>
				.featured-ribbon { width: 85px ; height: 83px; background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
				 <?php break;

                case "star2": ?>
           .featured-ribbon {margin: 5px 0 0 5px; height: 15px; width: 15px; background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
 				 
				  <?php break;

                case "star3": ?>
               .featured-ribbon {margin: 5px 0 0 5px; height: 15px; width: 15px; background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
 			
			  	  <?php break;

                case "star4": ?>
               .featured-ribbon {margin: -3px; height: 30px; width: 30px; background: url(<?php bloginfo('stylesheet_directory'); ?>/img/<?php echo get_option('featured_icons')?>.png) no-repeat !important;}
 			
			
			
                <?php break;

               
            }
?>


<?php if( !get_option('cat_img_1') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_1'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_1'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_2') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_2'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_2'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_3') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_3'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_3'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_4') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_4'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_4'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_5') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_5'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_5'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_6') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_6'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_6'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_7') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_7'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_7'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_8') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_8'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_8'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_9') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_9'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_9'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_10') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_10'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_10'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_11') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_11'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_11'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_12') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_12'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_12'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>
<?php if( !get_option('cat_img_13') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_13'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_13'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_14') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_14'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_14'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_15') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_15'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_15'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_16') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_16'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_16'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_17') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_17'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_17'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>
<?php if( !get_option('cat_img_18') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_18'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_18'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_19') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_19'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_19'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_20') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_20'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_20'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_21') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_21'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_21'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_22') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_22'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_22'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_23') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_23'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_23'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_24') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_24'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_24'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_25') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_25'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_25'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_26') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_26'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_26'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_27') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_27'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_27'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_28') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_28'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_28'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_29') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_29'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_29'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_30') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_30'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_30'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_31') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_31'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_31'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_32') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_32'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_32'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>
<?php if( !get_option('cat_img_33') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_33'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_33'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_34') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_34'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_34'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	
<?php if( !get_option('cat_img_35') ) {} else { ?>	#directory .catcol ul li.maincat.cat-item-<?php echo stripslashes(get_option('cat_35'))  ?> a {background: url('<?php echo stripslashes(get_option('cat_img_35'))  ?>') no-repeat left center;padding:6px 0px 0px 30px	}	<?php }?>	




	<?php  switch (get_option('footer_layout')) {

                case "Default": ?>

				
                <?php break;

                case "0": ?>

             .footer_main_res div.column  { display: none !important }
             .footer_main_res p {margin: 10px 0px !important}  
			 .footer_main_res {border: 0px !important}
                <?php break;

                case "1": ?>
			@media screen and (min-width: 740px) {	
             .footer_main_res div.column  { width: 96.7% ; }
			 }
                <?php break;

                case "2": ?>
				@media screen and (min-width: 740px) {
                .footer_main_res div.column  { width: 46.1% ; }
				 }
                <?php break;

                case "3": ?>
				@media screen and (min-width: 740px) {
                .footer_main_res div.column  { width: 29.495% ;}
				 }
				 <?php break;

                case "4": ?>
              @media screen and (min-width: 740px) {
                .footer_main_res div.column  { width: 21.15% ;}
				 }
			  
                <?php break;

               
            }
?>



<?php if( !get_option(custom_css ) ) {} else {echo get_option('custom_css'); }	?>	
	 </style>
	 
	 <?php
// if admin bar is showing set no margin
if ( is_admin_bar_showing() ) { ?>
<style> body {margin-top: 28px;}</style>
<?php } else { ?>
<style>body {margin-top: 0px;}</style>

<?php } ?>
	 
	 
	 
 
	 