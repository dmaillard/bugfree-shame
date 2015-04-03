<div class="related-adso">
<span class="related-ads-title"><?php echo get_option('related_ads_title')?></span>
<ul>
<?php
$term = wp_get_object_terms($post->ID, APP_TAX_CAT);
$parent = $term[0]->parent;
$parents[] = $term[0]->term_id;

$sql = "SELECT term_id, slug FROM `wp_terms` WHERE term_id = $parent";  
$results = mysql_query($sql);

// while($post=mysql_fetch_array($results)) {
// $newslug = $post['slug'];

//}

$thePostID = $wp_query->post->ID;


$args = array( 
'numberposts' => get_option('related_ads_freq'), 
'orderby' => 'rand', 
'post_type' => APP_POST_TYPE, 
APP_TAX_TAG => $newslug, 
'exclude' => $thePostID);




$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>


    <li><?php cp_ad_featured_thumbnail('ad-thumb'); ?>
	<a id="related-title" href="<?php the_permalink(); ?>">
	<?php if (strlen($post->post_title) > 30) {
echo substr(the_title($before = '', $after = '', FALSE), 0, 30) . '...'; } else {
the_title();
} ?></a><br/>
	<span class="pricy">
<?php if ( get_post_meta( $post->ID, 'price', true ) ) cp_get_price_legacy( $post->ID );
else cp_get_price( $post->ID, 'cp_price' ); ?></span><br/>
<span class="catos"><?php if ( $post->post_type == 'post' ) the_category(', '); else echo get_the_term_list( $post->ID, APP_TAX_CAT, '', ', ', '' ); ?></span>
	</li>
	

<?php endforeach; ?>
</ul>
</div>

<div class="clear"></div>
<?php wp_reset_query(); // to use the original query again ?>
