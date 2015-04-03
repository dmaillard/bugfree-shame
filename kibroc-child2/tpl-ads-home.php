<?php

// Template Name: Ads Home Template

?>



<div class="content_rest">


</div>
<div class="clear"></div>

<div class="clear"></div>
<div class="content">

	<div class="content_botbg">

		<div class="content_res">
		
	<!-- left block -->
	
	
<div class="content_left">


<?php

// display custom page content in home page

if (get_option('enable_contents') == 'true'):
	$import_page = get_page_by_title(get_option('home_page_import'));
	echo apply_filters('the_content', $import_page->post_content);
endif; ?>

	
<div class="clear"></div>

  <div class="prods-cnt">
        <div class="category-menu">
            <ul>
 <!-- home page tabs -->
				<?php
get_template_part(home, tabs); ?> 
            </ul>
        </div>
	
<?php
remove_action('appthemes_after_endwhile', 'cp_do_pagination'); ?>




 <!-- /* First home tab-->
	<?php
switch (get_option('tab_1'))
	{
case "Nothing": ?>
            <?php
	break;

case "Just-listed": ?>
            
				<div style="display: block !important; " id="Just-listed" class=" Just-listed">
				<?php
	get_template_part('loop', 'ad_listing-home'); ?>
				</div><!-- /block1 -->
				<div style="display: none; " id="Popular" class=" Popular">
				<?php
	get_template_part('loop', 'popular'); ?>
				</div><!-- /block2 -->
			
				<div style="display: none; " id="Random" class=" Random">
				<?php
	get_template_part('loop', 'random'); ?>
				</div><!-- /block3 -->
				
				<div style="display: none; " id="Ad-categories" class="prod-cnt prod-box Ad-categories">
				<div id="directory" class="directory <?php
	cp_display_style('dir_cols'); ?>">
				<?php
	echo cp_create_categories_list('dir'); ?>
				<div class="clr"></div>
				</div><!--/directory-->
				</div><!-- /block4 -->
				
            <?php
	break;

case "Popular": ?>
           
				<div style="display: none " id="Just-listed" class=" Just-listed">
				<?php
	get_template_part('loop', 'ad_listing-home'); ?>
				</div><!-- /block1 -->
				<div style="display: block !important; " id="Popular" class=" Popular">
				<?php
	get_template_part('loop', 'popular'); ?>
				</div><!-- /block2 -->
			
				<div style="display: none; " id="Random" class=" Random">
				<?php
	get_template_part('loop', 'random'); ?>
				</div><!-- /block3 -->
				
				<div style="display: none; " id="Ad-categories" class="prod-cnt prod-box Ad-categories">
				<div id="directory" class="directory <?php
	cp_display_style('dir_cols'); ?>">
				<?php
	echo cp_create_categories_list('dir'); ?>
				<div class="clr"></div>
				</div><!--/directory-->
				</div><!-- /block4 -->
		   
		   
            <?php
	break;

case "Random": ?>
			
				<div style="display: none " id="Just-listed" class=" Just-listed">
				<?php
	get_template_part('loop', 'ad_listing-home'); ?>
				</div><!-- /block1 -->
				<div style="display: none ; " id="Popular" class=" Popular">
				<?php
	get_template_part('loop', 'popular'); ?>
				</div><!-- /block2 -->
			
				<div style="display: block !important; " id="Random" class=" Random">
				<?php
	get_template_part('loop', 'random'); ?>
				</div><!-- /block3 -->
				
				<div style="display: none; " id="Ad-categories" class="prod-cnt prod-box Ad-categories">
				<div id="directory" class="directory <?php
	cp_display_style('dir_cols'); ?>">
				<?php
	echo cp_create_categories_list('dir'); ?>
				<div class="clr"></div>
				</div><!--/directory-->
				</div><!-- /block4 -->
			
			
			<?php
	break;

case "Ad-categories": ?>
			
				<div style="display: none " id="Just-listed" class=" Just-listed">
				<?php
	get_template_part('loop', 'ad_listing-home'); ?>
				</div><!-- /block1 -->
				<div style="display: none ; " id="Popular" class=" Popular">
				<?php
	get_template_part('loop', 'popular'); ?>
				</div><!-- /block2 -->
			
				<div style="display: none; " id="Random" class=" Random">
				<?php
	get_template_part('loop', 'random'); ?>
				</div><!-- /block3 -->
				
				<div style="display: block !important; " id="Ad-categories" class="prod-cnt prod-box Ad-categories">
				<div id="directory" class="directory <?php
	cp_display_style('dir_cols'); ?>">
				<?php
	echo cp_create_categories_list('dir'); ?>
				<div class="clr"></div>
				</div><!--/directory-->
				</div><!-- /block4 -->
			
			
			
			<?php
	break;
	}

?>
<!-- /* end of tab-->

    </div><!-- /prods-cnt -->
		<script>


jQuery.cookie = function (key, value, options) {


    // key and at least value given, set cookie...

    if (arguments.length > 1 && String(value) !== "[object Object]") {
        options = jQuery.extend({}, options);

        if (value === null || value === undefined) {
            options.expires = -1;
        }

        if (typeof options.expires === 'number') {
            var days = options.expires, t = options.expires = new Date();
            t.setDate(t.getDate() + days);
        }

        value = String(value);

        return (document.cookie = [
            encodeURIComponent(key), '=',
            options.raw ? value : encodeURIComponent(value),
            options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join(''));
    }


    // key and possibly options given, get cookie...

    options = value || {};
    var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
    return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};

</script>
</div><!-- /content_left -->
<?php
get_sidebar(); ?>


			<div class="clr"></div>

		</div><!-- /content_res -->

	</div><!-- /content_botbg -->

</div><!-- /content -->