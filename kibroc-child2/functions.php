<?php


// display the login message in the header
if (!function_exists('flat_login_head')) {
	function flat_login_head() {

		if ( is_user_logged_in() ) :
			global $current_user;
			$current_user = wp_get_current_user();
			$display_user_name = cp_get_user_name();
			$logout_url = cp_logout_url();
			?>
			<?php _e( 'Welcome,', APP_TD ); ?> <strong><?php echo $display_user_name; ?></strong> [ <a href="<?php echo CP_DASHBOARD_URL; ?>"><?php _e( 'My Dashboard', APP_TD ); ?></a> | <a href="<?php echo $logout_url; ?>"><?php _e( 'Log out', APP_TD ); ?></a> ]&nbsp;
		<?php else : ?>
			<?php _e( 'Welcome,', APP_TD ); ?> <strong><?php _e( 'visitor!', APP_TD ); ?></strong> [ <a href="<?php echo appthemes_get_registration_url(); ?>"><?php _e( 'Register', APP_TD ); ?></a> | <a href="<?php echo wp_login_url(); ?>"><?php _e( 'Login', APP_TD ); ?></a> ]&nbsp;
		<?php endif;

	}
}


// * Load color schemes styles//
add_filter('cp_load_styles', '__return_true');
/*sideup div on mouse over the featured ads*/


/*Note: to use later than 1.0*/
//wp_enqueue_script('slideup', get_stylesheet_directory_uri() . '/includes/js/slideup.js');

// Change the thumbnails' sizes for the featured ads
if (!function_exists('jt_ad_featured_thumbnail')):
	function jt_ad_featured_thumbnail()
		{
		global $post, $cp_options;

		// go see if any images are associated with the ad

		$image_id = cp_get_featured_image_id($post->ID);

		// set the class based on if the hover preview option is set to "yes"

		$prevclass = ($cp_options->ad_image_preview) ? 'preview' : 'nopreview';
		if ($image_id > 0)
			{

			// get 50x50 v3.0.5+ image size

			$adthumbarray = wp_get_attachment_image($image_id, 'featured-thumbnail');

			// grab the large image for onhover preview

			$adlargearray = wp_get_attachment_image_src($image_id, 'large');
			$img_large_url_raw = $adlargearray[0];

			// must be a v3.0.5+ created ad

			if ($adthumbarray)
				{
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumbarray . '</a>';

				// maybe a v3.0 legacy ad

				}
			  else
				{
				$adthumblegarray = wp_get_attachment_image_src($image_id, 'thumbnail');
				$img_thumbleg_url_raw = $adthumblegarray[0];
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumblegarray . '</a>';
				}

			// no image so return the placeholder thumbnail

			}
		  else
			{
			echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '"><img class="attachment-featured-thumbnail" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-75.jpg') . '" /></a>';
			}
		}

endif;

// Grid mode thuimbnails
// Change the thumbnails' sizes for the featured ads

if (!function_exists('jt_ad_grid_thumbnail')):
	function jt_ad_grid_thumbnail()
		{
		global $post, $cp_options;

		// go see if any images are associated with the ad

		$image_id = cp_get_featured_image_id($post->ID);

		// set the class based on if the hover preview option is set to "yes"

		$prevclass = ($cp_options->ad_image_preview) ? 'preview' : 'nopreview';
		if ($image_id > 0)
			{

			// get 130x100 image size

			$adthumbarray = wp_get_attachment_image($image_id, 'ad-grid');

			// grab the large image for onhover preview

			$adlargearray = wp_get_attachment_image_src($image_id, 'large');
			$img_large_url_raw = $adlargearray[0];

			// must be a v3.0.5+ created ad

			if ($adthumbarray)
				{
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumbarray . '</a>';

				// maybe a v3.0 legacy ad

				}
			  else
				{
				$adthumblegarray = wp_get_attachment_image_src($image_id, 'thumbnail');
				$img_thumbleg_url_raw = $adthumblegarray[0];
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumblegarray . '</a>';
				}

			// no image so return the placeholder thumbnail

			}
		  else
			{
			echo '<a class="no-attachment-featured-thumbnail" href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '"><img  alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-grid.jpg') . '" /></a>';
			}
		}

endif;

// List mode thumbnails
// Change the thumbnails' sizes for the featured ads

if (!function_exists('jt_ad_list_thumbnail')):
	function jt_ad_list_thumbnail()
		{
		global $post, $cp_options;

		// go see if any images are associated with the ad

		$image_id = cp_get_featured_image_id($post->ID);

		// set the class based on if the hover preview option is set to "yes"

		$prevclass = ($cp_options->ad_image_preview) ? 'preview' : 'nopreview';
		if ($image_id > 0)
			{

			// get 130x100 image size

			$adthumbarray = wp_get_attachment_image($image_id, 'ad-grid');

			// grab the large image for onhover preview

			$adlargearray = wp_get_attachment_image_src($image_id, 'large');
			$img_large_url_raw = $adlargearray[0];

			// must be a v3.0.5+ created ad

			if ($adthumbarray)
				{
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumbarray . '</a>';

				// maybe a v3.0 legacy ad

				}
			  else
				{
				$adthumblegarray = wp_get_attachment_image_src($image_id, 'thumbnail');
				$img_thumbleg_url_raw = $adthumblegarray[0];
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumblegarray . '</a>';
				}

			// no image so return the placeholder thumbnail

			}
		  else
			{
			echo '<a class="no-attachment-featured-thumbnail" href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '"><img  alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-130.jpg') . '" /></a>';
			}
		}

endif;

// Grid mode thumbnails
// Change the thumbnails' sizes for the featured ads

if (!function_exists('jts_ad_grid_thumbnail')):
	function jts_ad_grid_thumbnail()
		{
		global $post, $cp_options;

		// go see if any images are associated with the ad

		$image_id = cp_get_featured_image_id($post->ID);

		// set the class based on if the hover preview option is set to "yes"

		$prevclass = ($cp_options->ad_image_preview) ? 'preview' : 'nopreview';
		if ($image_id > 0)
			{

			// get 130x100 image size

			$adthumbarray = wp_get_attachment_image($image_id, 'ad-grid');

			// grab the large image for onhover preview

			$adlargearray = wp_get_attachment_image_src($image_id, 'large');
			$img_large_url_raw = $adlargearray[0];

			// must be a v3.0.5+ created ad

			if ($adthumbarray)
				{
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '"><div class="featured-ribbon"></div></a>';

				// maybe a v3.0 legacy ad

				}
			  else
				{
				$adthumblegarray = wp_get_attachment_image_src($image_id, 'thumbnail');
				$img_thumbleg_url_raw = $adthumblegarray[0];
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '"><div class="featured-ribbon"></div></a>';
				}

			// no image so return the placeholder thumbnail

			}
		  else
			{
			echo '';
			}
		}

endif;

// setup different image sizes for featured ad

function grid_add_new_image_size()
	{
	add_image_size('ad-grid', 220, 190, true);
	}

add_action('appthemes_init', 'grid_add_new_image_size');

// Change the thumbnails' sizes for the featured ads for the alternative slider on top



function featured_add_new_image_size()
	{
	add_image_size( 'jt_ad_featured_thumbnail_s', 200, 300, true ); // featured thumbnail size
}
add_action('appthemes_init', 'featured_add_new_image_size');







if (!function_exists('jt_ad_featured_thumbnail_s')):
	function jt_ad_featured_thumbnail_s()
		{
		global $post, $cp_options;

		// go see if any images are associated with the ad

		$image_id = cp_get_featured_image_id($post->ID);

		// set the class based on if the hover preview option is set to "yes"
		// $prevclass = ( $cp_options->ad_image_preview ) ? 'preview' : 'nopreview';

		if ($image_id > 0)
			{

			// get 50x50 v3.0.5+ image size

			$adthumbarray = wp_get_attachment_image($image_id, 'featured-thumbnail');

			// grab the large image for onhover preview

			$adlargearray = wp_get_attachment_image_src($image_id, 'large');
			$img_large_url_raw = $adlargearray[0];

			// must be a v3.0.5+ created ad

			if ($adthumbarray)
				{
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumbarray . '</a>';

				// maybe a v3.0 legacy ad

				}
			  else
				{
				$adthumblegarray = wp_get_attachment_image_src($image_id, 'thumbnail');
				$img_thumbleg_url_raw = $adthumblegarray[0];
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumblegarray . '</a>';
				}

			// no image so return the placeholder thumbnail

			}
		  else
			{
			echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '"><img class="attachment-featured-thumbnail" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-190.jpg') . '" /></a>';
			}
		}

endif;

// processes the entire ad thumbnail logic within the loop

if (!function_exists('cp_ad_loop_thumbnail')):
	function cp_ad_loop_thumbnail()
		{
		global $post, $cp_options;

		// go see if any images are associated with the ad

		$image_id = cp_get_featured_image_id($post->ID);

		// set the class based on if the hover preview option is set to "yes"

		$prevclass = ($cp_options->ad_image_preview) ? 'preview' : 'nopreview';
		if ($image_id > 0)
			{

			// get 75x75 v3.0.5+ image size

			$adthumbarray = wp_get_attachment_image($image_id, 'ad-thumb');

			// grab the large image for onhover preview

			$adlargearray = wp_get_attachment_image_src($image_id, 'large');
			$img_large_url_raw = $adlargearray[0];

			// must be a v3.0.5+ created ad

			if ($adthumbarray)
				{
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumbarray . '</a>';

				// maybe a v3.0 legacy ad

				}
			  else
				{
				$adthumblegarray = wp_get_attachment_image_src($image_id, 'thumbnail');
				$img_thumbleg_url_raw = $adthumblegarray[0];
				echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" class="' . $prevclass . '" data-rel="' . $img_large_url_raw . '">' . $adthumblegarray . '</a>';
				}

			// no image so return the placeholder thumbnail

			}
		  else
			{
			echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '"><img class="attachment-medium" alt="" title="" src="' . appthemes_locate_template_uri('images/no-thumb-75.jpg') . '" /></a>';
			}
		}

endif;

// setup different image sizes for featured ad

if (function_exists('add_image_size'))
	{
	add_image_size('featured-thumbnail', 220, 190, true); // featured thumbnail size, box crop mode
	}

// Unregister menus

unregister_nav_menu(array(
	'primary' => __('Primary Navigation', APP_TD) ,
	'secondary' => __('Footer Navigation', APP_TD) ,
	'theme_dashboard' => __('Theme Dashboard', APP_TD)
));

// This theme supports native menu options, and uses wp_nav_menu() in one location for top navigation.

function jt_register_menus()
	{
	register_nav_menus(array(
		'top' => __('Top Navigation', APP_TD) ,
		'primary' => __('Primary Navigation', APP_TD) ,
		'secondary' => __('Footer Navigation', APP_TD) ,
		'theme_dashboard' => __('Theme Dashboard', APP_TD)
	));
	}

// add_action( 'init', 'jt_register_menus' );
// remove the actions, and add some new ones instead

function Flatron_modify_actions()
	{

	// remove_action( 'appthemes_after_post_content', 'cp_do_loop_stats' );

	remove_action('appthemes_after_post_title', 'cp_ad_loop_meta');
	remove_action('wp_enqueue_scripts', 'cp_style_changer');
	}

add_action('appthemes_init', 'flatron_modify_actions');

// Change the metas in ad listings

function jt_ad_loop_meta()
	{
	global $post, $cp_options;
	if (is_singular(APP_POST_TYPE)) return;
?>	
    <p class="post-meta">
        <span class="folder2"><em></em><?php
	if ($post->post_type == 'post') the_category(', ');
	  else echo get_the_term_list($post->ID, APP_TAX_CAT, '', ', ', ''); ?></span>   <span class="owner"><em></em><?php
	if ($cp_options->ad_gravatar_thumb) appthemes_get_profile_pic(get_the_author_meta('ID') , get_the_author_meta('user_email') , 16) ?><?php
	the_author_posts_link(); ?></span><span class="clock2"><em></em> <span><?php
	echo date_i18n(__('d/M', APP_TD) , strtotime($post->post_date)); ?></span></span>
   
   </p>
	
<?php
	}

add_action('appthemes_after_post_title', 'jt_ad_loop_meta');

// changes the css file based on what is selected on the options page

if (!function_exists('jt_style_changer')):
	function jt_style_changer()
		{
		global $cp_options;
		wp_enqueue_style('at-main', get_stylesheet_uri() , false);

		// turn off stylesheets if customers want to use child themes

		if (!$cp_options->disable_stylesheet) wp_enqueue_style('at-color', get_stylesheet_directory_uri() . '/styles/' . get_option('jt_colors') , false);
		if (file_exists(get_stylesheet_directory() . '/styles/custom.css')) wp_enqueue_style('at-color', get_stylesheet_directory_uri() . '/styles/' . get_option('jt_colors') , false);
		}

endif;
add_action('wp_enqueue_scripts', 'jt_style_changer');

// Override the default select box

if (!function_exists('jt_scripts')):
	function jt_scripts()
		{
		global $cp_options;

		// styles select elements

		if ($cp_options->selectbox)
			{
			wp_enqueue_script('selectbox', get_stylesheet_directory_uri() . '/includes/js/selectbox.min.js', array(
				'jquery'
			) , '1.1.4');
			wp_enqueue_script('cookies', get_stylesheet_directory_uri() . '/includes/js/jquery.cookie.js', array(
				'jquery'
			) , '1.0');
			}
		}

endif;
add_action('wp_enqueue_scripts', 'jt_scripts');

// No Price Tag when empty

function unhook_classipress_functions()
	{
	remove_action('appthemes_before_post_title', 'cp_ad_loop_price');
	}

add_action('init', 'unhook_classipress_functions');

function cp_remove_loop_price()
	{
	if (is_page()) return; // don't do ad-meta on pages
	global $post;
	if ($post->post_type == 'page' || $post->post_type == 'post') return;
	$price = get_post_meta($post->ID, 'cp_price', true);
	if (!empty($price) AND ($price > 0))
		{
?>
<div class="price-wrap">
<p class="post-price">
<?php
		if (get_post_meta($post->ID, 'price', true)) cp_get_price_legacy($post->ID);
		  else cp_get_price($post->ID, 'cp_price'); ?></p>
</div>
<?php
		}
	  else
		{ ?>
<?php
		}
	}

add_action('appthemes_before_post_title', 'cp_remove_loop_price');

// display free instead of no price

function cp_ad_loop_prices()
	{
	if (is_page()) return; // don't do ad-meta on pages
	global $post;
?>
<div class="price-wrap">
<span class="tag-head"></span><p class="post-price"><?php
	if (get_post_meta($post->ID, 'price', true)) cp_get_price_legacy($post->ID);
	if (get_post_meta($post->ID, 'cp_price', true) == 0)
		{
		echo "Free";
		}
	  else cp_get_price($post->ID, 'cp_price');
?></p>
</div>

<?php
	}

// add_action( 'appthemes_before_post_title', 'cp_ad_loop_prices' );
// function to display featured ads on top

function custom_sticky_posts_to_top($ref_array)
	{
	if (get_query_var('post_type') == 'post' || get_query_var('post_type') == 'page') return $ref_array;
	$sticky_posts = get_option('sticky_posts');
	$num_sticky_posts = count($sticky_posts);
	$num_posts = count($ref_array);
	$sticky_offset = 0;
	for ($i = 0; $i < $num_posts; $i++)
		{

		// var_export($ref_array[$i]->ID); echo '<br />';

		if (in_array($ref_array[$i]->ID, $sticky_posts))
			{
			$sticky_post = $ref_array[$i];

			// Remove sticky from current position

			array_splice($ref_array, $i, 1);

			// Move to front, after other stickies

			array_splice($ref_array, $sticky_offset, 0, array(
				$sticky_post
			));

			// Increment the sticky offset.  The next sticky will be placed at this offset.

			$sticky_offset++;

			// Remove post from sticky posts array

			$offset = array_search($sticky_post->ID, $sticky_posts);
			unset($sticky_posts[$offset]);
			}
		}

	// echo '<pre>';var_export($ref_array); echo '</pre>';//exit;

	return $ref_array;
	}

// Option to pull all featured ads on top of listings

if (get_option('enable_featured_top') == 'Yes'):
	add_filter('posts_results', 'custom_sticky_posts_to_top', 20, 1);
endif;

// Custom header options for theme options

add_action('wp_head', 'custom_head');

function custom_head()
	{
?>
<?php
	get_template_part(header, options); ?> 

<script>
var $j = jQuery.noConflict();

// Use jQuery via $j(...)

$j(document).ready(function(){
});
</script>


<script>
$j(function(){
   
	
	<?php
	if (get_option('mode_default') == 'Grid'): ?>
	 var default_view = 'grid'; // choose the view to show by default (grid/list)
	<?php
	endif; ?>
	
    <?php
	if (get_option('mode_default') == 'List'): ?>
	 var default_view = 'list'; // choose the view to show by default (grid/list)
	<?php
	endif; ?>

	
    // check the presence of the cookie, if not create "view" cookie with the default view value

    if($j.cookie('view') !== 'undefined'){
        $j.cookie('view', default_view, { expires: 7, path: '/' });
    } 
    function get_grid(){
        $j('.list').removeClass('list-active');
        $j('.grid').addClass('grid-active');
        $j('.prod-cnt').animate({opacity:0},function(){
            $j('.prod-cnt').removeClass('box-list');
            $j('.prod-cnt').addClass('box');
            $j('.prod-cnt').stop().animate({opacity:1});
        });
    } // end "get_grid" function
    function get_list(){
        $j('.grid').removeClass('grid-active');
        $j('.list').addClass('list-active');
        $j('.prod-cnt').animate({opacity:0},function(){
            $j('.prod-cnt').removeClass('box');
            $j('.prod-cnt').addClass('box-list');
            $j('.prod-cnt').stop().animate({opacity:1});
        });
    } // end "get_list" function

    if($j.cookie('view') == 'list'){ 

        // we dont use the "get_list" function here to avoid the animation

        $j('.grid').removeClass('grid-active');
        $j('.list').addClass('list-active');
        $j('.prod-cnt').animate({opacity:0});
        $j('.prod-cnt').removeClass('box');
        $j('.prod-cnt').addClass('box-list');
        $j('.prod-cnt').stop().animate({opacity:1}); 
    } 

    if($j.cookie('view') == 'grid'){ 
        $j('.list').removeClass('list-active');
        $j('.grid').addClass('grid-active');
        $j('.prod-cnt').animate({opacity:0});
            $j('.prod-cnt').removeClass('box-list');
            $j('.prod-cnt').addClass('box');
            $j('.prod-cnt').stop().animate({opacity:1});
    }

    $j('#list').click(function(){   
        $j.cookie('view', 'list'); 
        get_list()
    });

    $j('#grid').click(function(){ 
        $j.cookie('view', 'grid'); 
        get_grid();
    });

    /* filter */
    $j('.category-menu ul li').click(function(){
        var CategoryID = $j(this).attr('category');
        $j('.category-menu ul li').removeClass('cat-active');
        $j(this).addClass('cat-active');
        
        $j('.prod-cnt').each(function(){
            if(($j(this).hasClass(CategoryID)) == false){
               $j(this).css({'display':'none'});
            };
        });
        $j('.'+CategoryID).fadeIn(); 
        
    });
});
</script>



<?php
	}

// load responsive styles

function responsive_styles()
	{
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/styles/responsive.css', false, '1.0', 'all');
	}

add_action('wp_enqueue_scripts', 'responsive_styles');





//siubmit an ad button
class AD_ADD_Button extends WP_Widget {

	function __construct() {
		$widget_ops = array(
			'description' => __( 'A button for creating a new ad', APP_TD )
		);

		parent::__construct( 'create_listing_button', __( 'Flatron - Submit an ad button', APP_TD ), $widget_ops );
	}

	 function widget($args, $instance) {	
        extract( $args );
        $message 	= $instance['message'];
        ?>
          
                 
						
							
							<a href="<?php echo CP_ADD_NEW_URL; ?>" class="btn btn-default widd"><?php echo $message; ?></a>
							
          
        <?php
    }
 
    /** @see WP_Widget::update -- do not rename this */
    function update($new_instance, $old_instance) {		
		$instance = $old_instance;
		$instance['message'] = strip_tags($new_instance['message']);
        return $instance;
    }
 
    /** @see WP_Widget::form -- do not rename this */
    function form($instance) {	
 
        $message	= esc_attr($instance['message']);
        ?>
      
		<p>
		  <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo $message; ?>" />
        </p>
        <?php 
    }
  }











// custom sidebar 100x100 ads widget

class jt_Widget_100_Ads extends WP_Widget

	{
	function jt_Widget_100_Ads()
		{
		$widget_ops = array(
			'description' => __('Places an ad space in the sidebar for 100x100 ads', APP_TD)
		);
		$control_ops = array(
			'width' => 500,
			'height' => 350
		);
		$this->WP_Widget('cp_125_ads', __('Flatron 100x100 Ads', APP_TD) , $widget_ops, $control_ops);
		}

	function widget($args, $instance)
		{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$newin = isset($instance['newin']) ? $instance['newin'] : false;
		if (isset($instance['ads'])):

			// separate the ad line items into an array

			$ads = explode("\n", $instance['ads']);
			if (sizeof($ads) > 0):
				echo $before_widget;
				if ($title) echo $before_title . $title . $after_title;
				if ($newin) $newin = 'target="_blank"';
?>

				<ul class="ads">
			<?php
				$alt = 1;
				foreach($ads as $ad):
					if ($ad && strstr($ad, '|'))
						{
						$alt = $alt * -1;
						$this_ad = explode('|', $ad);
						echo '<li class="';
						if ($alt == 1) echo 'alt';
						echo '"><a href="' . $this_ad[0] . '" rel="' . $this_ad[3] . '" ' . $newin . '><img src="' . $this_ad[1] . '" width="100" height="100" alt="' . $this_ad[2] . '" /></a></li>';
						}

				endforeach;
?>
				</ul>

				<?php
				echo $after_widget;
			endif;
		endif;
		}

	function update($new_instance, $old_instance)
		{
		$instance = $old_instance;
		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['ads'] = strip_tags($new_instance['ads']);
		$instance['newin'] = $new_instance['newin'];
		return $instance;
		}

	function form($instance)
		{

		// load up the default values

		$default_ads = "http://www.jobthemes.com|" . get_stylesheet_directory_uri() . "/images/ad100.gif|Ad 1|nofollow\n" . "http://www.jobthemes.com|" . get_stylesheet_directory_uri() . "/images/ad100.gif|Ad 2|follow\n" . "http://www.jobthemes.com|" . get_stylesheet_directory_uri() . "/images/ad100.gif|Ad 3|nofollow\n" . "http://www.jobthemes.com|" . get_stylesheet_directory_uri() . "/images/ad100.gif|Ad 4|follow";
		$defaults = array(
			'title' => __('Sponsored Ads', APP_TD) ,
			'ads' => $default_ads,
			'rel' => true,
			'newin' => ''
		);
		$instance = wp_parse_args((array)$instance, $defaults);
?>
		<p>
			<label><?php
		_e('Title:', APP_TD); ?></label>
			<input type="text" class="widefat" id="<?php
		echo $this->get_field_id('title'); ?>" name="<?php
		echo $this->get_field_name('title'); ?>" value="<?php
		echo $instance['title']; ?>" />
		</p>

		<p>
			<label><?php
		_e('Ads:', APP_TD); ?></label>
			<textarea class="widefat" rows="16" cols="20" id="<?php
		echo $this->get_field_id('text'); ?>" name="<?php
		echo $this->get_field_name('ads'); ?>" cols="5" rows="5"><?php
		echo $instance['ads']; ?></textarea>
			<?php
		_e('Enter one ad entry per line in the following format:<br /> <code>URL|Image URL|Image Alt Text|rel</code><br /><strong>Note:</strong> You must hit your &quot;enter/return&quot; key after each ad entry otherwise the ads will not display properly.', APP_TD); ?>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php
		checked($instance['newin'], 'on'); ?> id="<?php
		echo $this->get_field_id('newin'); ?>" name="<?php
		echo $this->get_field_name('newin'); ?>" />
			<label><?php
		_e('Open ads in a new window?', APP_TD); ?></label>
		</p>
<?php
		}
	}

// facebook like box sidebar widget

class jt_Widget_Facebook extends WP_Widget

	{
	function jt_Widget_Facebook()
		{
		$widget_ops = array(
			'description' => __('This places a Facebook page Like Box in your sidebar to attract and gain Likes from visitors.', APP_TD)
		);
		$this->WP_Widget('cp_facebook_like', __('Flatron Facebook Like Box', APP_TD) , $widget_ops);
		}

	function widget($args, $instance)
		{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$fid = $instance['fid'];
		$connections = $instance['connections'];
		$width = $instance['width'];
		$height = $instance['height'];
		echo $before_widget;
		if ($title) echo $before_title . $title . $after_title;
?>
		<div class="pad5"></div>
		<iframe src="http://www.facebook.com/plugins/likebox.php?id=<?php
		echo urlencode($fid); ?>&amp;connections=<?php
		echo urlencode($connections); ?>&amp;stream=false&amp;header=true&amp;width=<?php
		echo urlencode($width); ?>&amp;height=<?php
		echo $height; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php
		echo esc_attr($width); ?>px; height:<?php
		echo esc_attr($height); ?>px;" allowTransparency="true"></iframe>
		<div class="pad5"></div>
	<?php
		echo $after_widget;
		}

	function update($new_instance, $old_instance)
		{
		$instance = $old_instance;
		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['fid'] = strip_tags($new_instance['fid']);
		$instance['connections'] = strip_tags($new_instance['connections']);
		$instance['width'] = strip_tags($new_instance['width']);
		$instance['height'] = strip_tags($new_instance['height']);
		return $instance;
		}

	function form($instance)
		{
		$defaults = array(
			'title' => __('Facebook Friends', APP_TD) ,
			'fid' => '235898026521748',
			'connections' => '10',
			'width' => '290',
			'height' => '290'
		);
		$instance = wp_parse_args((array)$instance, $defaults);
?>

		<p>
			<label for="<?php
		echo $this->get_field_id('title'); ?>"><?php
		_e('Title:', APP_TD); ?></label>
			<input type="text" class="widefat" id="<?php
		echo $this->get_field_id('title'); ?>" name="<?php
		echo $this->get_field_name('title'); ?>" value="<?php
		echo $instance['title']; ?>" />
		</p>

		<p>
			<label for="<?php
		echo $this->get_field_id('fid'); ?>"><?php
		_e('Facebook ID:', APP_TD); ?></label>
			<input type="text" class="widefat" id="<?php
		echo $this->get_field_id('fid'); ?>" name="<?php
		echo $this->get_field_name('fid'); ?>" value="<?php
		echo $instance['fid']; ?>" />
		</p>

		<p style="text-align:left;">
			<input type="text" class="widefat" id="<?php
		echo $this->get_field_id('connections'); ?>" name="<?php
		echo $this->get_field_name('connections'); ?>" value="<?php
		echo $instance['connections']; ?>" style="width:50px;" />
			<label for="<?php
		echo $this->get_field_id('connections'); ?>"><?php
		_e('Connections', APP_TD); ?></label>			
		</p>

		<p style="text-align:left;">
			<input type="text" class="widefat" id="<?php
		echo $this->get_field_id('width'); ?>" name="<?php
		echo $this->get_field_name('width'); ?>" value="<?php
		echo $instance['width']; ?>" style="width:50px;" />
			<label for="<?php
		echo $this->get_field_id('width'); ?>"><?php
		_e('Width', APP_TD); ?></label>
		</p>

		<p style="text-align:left;">
			<input type="text" class="widefat" id="<?php
		echo $this->get_field_id('height'); ?>" name="<?php
		echo $this->get_field_name('height'); ?>" value="<?php
		echo $instance['height']; ?>" style="width:50px;" />
			<label for="<?php
		echo $this->get_field_id('height'); ?>"><?php
		_e('Height', APP_TD); ?></label>
		</p>

	<?php
		}
	}

// register the custom sidebar widgets

function jt_widgets_init()
	{
	register_widget('jt_Widget_Facebook');
	register_widget('jt_Widget_100_Ads');
	register_widget('AD_ADD_BUTTON');
	}

add_action('widgets_init', 'jt_widgets_init');

// Unregister/register facebook widget

function jt_unregister_widgets()
	{
	unregister_widget('AppThemes_Widget_Facebook');
	unregister_widget('AppThemes_Widget_125_Ads');
	}

add_action('widgets_init', 'jt_unregister_widgets', 11);

// remove breadcrumb

remove_action('init', 'cp_breadcrumb');

// call the admin options

include_once 'admin/options-init.php';

// load cookie script for grid mode
function thematic_enqueue_scripts() {
    wp_enqueue_script('cookie', get_stylesheet_directory_uri() . '/includes/js/jquery.cookie.js', array('jquery') , '1.3.5');
}
add_action('wp_enqueue_scripts', 'thematic_enqueue_scripts');


// New featured ads array

function cp_get_featured_slider_adsd()
	{
	$args = array(
		'post_type' => APP_POST_TYPE,
		'post_status' => 'publish',
		'post__in' => get_option('sticky_posts') ,
		'posts_per_page' => 15,
		'orderby' => 'rand',
		'suppress_filters' => false,
	);
	$args = apply_filters('cp_featured_slider_args', $args);
	$featured = new WP_Query($args);
	if (!$featured->have_posts()) return false;
	return $featured;
	}
